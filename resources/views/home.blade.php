@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <div class="card">
                        <div class="card-header">
                            <h4>Blast films</h4>
                            @if(Auth::user()->hasRole("employee"))
                                <a class="btn btn-primary"  href="{{ route('film') }}">Create new film</a>
                            @endif

                            @if(Auth::user()->hasRole("admin"))
                                <a class="btn btn-primary"  href="{{ route('film') }}">Create new film</a>
                                <a class="btn btn-primary"  href="{{ route('register') }}">Register employee</a>
                            @endif
                            <div class="dropdown float-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                View films by
                            </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Author</a>
                                    <a class="dropdown-item" href="#">Year</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Film title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Producer subtitle</h6>
                                    <p class="card-text">Sponsor. City, Year of Production</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="jumbotron">
                        <h1 class="display-4">Hello, welcome to blast films!</h1>
                        <p class="lead">This is a simple web application for film management as part of
                            CTT06105: Assignment.</p>
                        <hr class="my-4">
                        <p>If your employee please proceed to login. For clients who want's to see blast films collection please register to proceed</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" type="text" role="button">Login to proceed</a>
                        <a class="btn btn-link btn-lg" href="{{ route('register') }}" role="button">Client registration </a>
                    </div>
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
