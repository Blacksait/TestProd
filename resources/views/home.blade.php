@extends('layout.main')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="margin-top: 10%">Dashboard</div>

                <div class="card-body mt-5 mb-5" style="margin-top: 15%;margin-bottom: 15%;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <b>{{ Auth::user()->name }}</b>!
                    <div style="margin-top: 20px">
                        <h3>
                        <a class="dropdown-item" style="color: #000"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="icon-material-outline-power-settings-new"></i>
                            Logout
                        </a>
                        </h3>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
