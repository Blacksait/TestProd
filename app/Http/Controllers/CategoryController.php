<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except' => ['index']]);//перенаправление на регистрацию
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        $category->label = $request->input('name');
        $category->external_id = 1;
        $category->parent_id = 1;
        $category->user_id = auth()->user()->id;
//        dd($category);
        $category->save();

        return redirect('/category')->with('success', 'category была добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $category_id = auth()->user()->id;
        $user = User::find($category_id);

        return view('category.show')->with('category',$user->categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if(auth()->user()->id != $category->user_id)
            return redirect('/category')->with('error', 'Ошибка!');

        return view('category.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:190',
        ]);


        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->label = $request->input('name');
        $category->external_id = 1;
        $category->parent_id = 1;
        $category->user_id = auth()->user()->id;

        $category->save();

        return redirect('/category')->with('success','Category была обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();
        return  redirect('/category')->with('success','Category удален');
    }
}
