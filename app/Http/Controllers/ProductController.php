<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\User;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except' => ['index']]);//перенаправление на регистрацию
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productQuery = Product::query();//запрос

        if ($request->filled('name')) {//если наш запрос имеет name
            $productQuery->where('name', 'like', "%$request->name%");//ищет нужное слово

        }

        if ($request->filled('more_types')) {//если наш запрос имеет more_types
            if ($request->more_types == 'Newest') {//начинаем сортировку
                $productQuery->orderBy('updated_at', 'desc');
            } elseif ($request->more_types == 'Oldest') {
                $productQuery->orderBy('updated_at', 'asc');
            } elseif ($request->more_types == 'Dearest') {
                $productQuery->orderBy('price', 'desc');
            } elseif ($request->more_types == 'Cheapest') {
                $productQuery->orderBy('price', 'asc');
            }
        }

        if ($request->filled('slider')) {//проврека ползунка цены
            $value = explode(',', request('slider'));//разделяет значение , и передает их в массив
            $min = $value[0];
            $max = $value[1];
            $productQuery->where('price', '>=', $min)->where('price', '<=', $max);
        }

        if ($request->has('category_types')) {
            $productQuery->whereHas('categories', function ($category) {//обращение к дочерней таблице
                $category->whereIn('label', request('category_types'));//выбор значений и вывод поста,связанный отношением, из дочерней таблицы
            });
        }


        $product = $productQuery->paginate(50);//пагинация

        return view('product.index')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:40',
            'description' => 'required|max:60',
            'category_types' => 'required|max:60',
            'price' => 'required|max:60',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        if($product->availability == null){//тут ошибка,надо было при оздании миграции указывать дефолтное значение
            $product->availability = 0;
        }else{
            $product->availability = $request->input('availability');
        }

        $product->external_id = 1;
        $product->user_id = auth()->user()->id;

        $product->save();

        $products = Product::first();

        $categoriesID = $request->category_types;//находим category_types job
        $product->categories()->attach($categoriesID);//приравниваем к product


        return redirect('/product')->with('success', 'product был добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()//$id
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('product.show')->with('products',$user->products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        return  redirect('/product')->with('success','Товар удален');
    }
}
