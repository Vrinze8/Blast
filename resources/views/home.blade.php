@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary"  href="{{ route('film') }}">Create new film</a>
                    <a class="btn btn-primary"  href="{{ route('register') }}">Register employee</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Film title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Producer subtitle</h6>
                            <p class="card-text">Sponsor. City, Year of Production</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
