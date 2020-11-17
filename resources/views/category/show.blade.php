@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(count($category) > 0)
                            @foreach($category as $el)
                                <div class="alert alert-info" style="background: aliceblue;padding: 5%;margin-top: 15px">
                                    <h1>{{$el->name}}</h1>

                                    <hr>

                                    <button class="button btn btn-danger ripple-effect"><a style="color: #fff;" href="/category/{{$el->id}}/edit">Обновить</a></button>
                                    <br>
                                    <br>

                                    {!! Form::open(['action' =>['CategoryController@destroy',$el->id],'method'=>'POST']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{FOrm::submit('Удалить категорию',['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}

                                </div>
                            @endforeach
                        @else
                            <p style="margin-top: 12%;margin-bottom: 12%">У вас еще нет категорий</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
