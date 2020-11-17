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

                        @if(count($products) > 0)
                            @foreach($products as $el)
                                <div class="alert alert-info" style="background: #4aa0e6;padding: 5%;margin-top: 15px">
                                    <h1>{{$el->name}}</h1>
                                    <h4>{{$el->description}}</h4>
                                    <hr>
                                    <br><br>

                                    {!! Form::open(['action' =>['ProductController@destroy',$el->id],'method'=>'POST']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{FOrm::submit('Удалить товар',['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}

                                </div>
                            @endforeach
                        @else
                            <p style="margin-top: 12%;margin-bottom: 12%">У вас еще нет статей</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
