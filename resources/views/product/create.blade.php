@extends('layout.main')

@section('content')

    <!-- Intro Banner
================================================== -->
    <!-- add class "disable-gradient" to enable consistent background overlay -->
    <div class="intro-banner" data-background-image="images/home-background.jpg">
        <div class="container">

            <div class="container mt-5 mb-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 mb-5">
                        <div class="card mb-5">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="container mb-5">
                                    {!! Form::open(['action' => 'ProductController@store' , 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                                    <div class="form-group" style="width: 50%">
                                        {!! Form::label('name','Добавление названия') !!}
                                        {!! Form::text('name','',['class' => 'form-control' , 'placeholder' => 'Введите название']) !!}
                                    </div>

                                    <div class="form-group" style="width: 50%">
                                        {!! Form::label('description','Добавление краткого описания') !!}
                                        {!! Form::text('description','',['class' => 'form-control' , 'placeholder' => 'Введите описание']) !!}
                                    </div>

                                    <div class="form-group" style="width: 50%">
                                        {!! Form::label('price','Добавление цены') !!}
                                        {!! Form::text('price','',['class' => 'form-control' , 'placeholder' => 'добавтье цену']) !!}
                                    </div>

                                    <div class="form-group" style="width: 50%">
                                        {!! Form::label('availability','Наличие товара') !!}
                                        {!! Form::checkbox ('availability') !!}
                                    </div>

                                    <div class="sidebar-widget" style="width: 50%;">
                                        <h3>Category</h3>
                                        <select class="selectpicker default"  multiple data-selected-text-format="count" name="category_types[]" data-size="7" title="All Categories" >
                                            @foreach(\App\Category::all() as $category)
                                                <option value="{{$category->id}}" name="{{$category->name}}" @if(in_array($category->label, request('category_types',[]))) selected @endif>{{ $category->label  }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {!! Form::submit('Добавить',['class' => 'btn btn-success']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Membership Plans / End-->

@endsection
