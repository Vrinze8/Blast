@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary"  href="{{ route('film') }}">Create new film</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    <div>
                    <form>
                        <div class="form-group">
                            <label for="filmTitle">Title</label>
                            <input type="email" class="form-control" id="filmTitle" aria-describedby="emailHelp" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="producer">Producer</label>
                            <input type="text" class="form-control" id="producer" placeholder="Producer">
                        </div>
                        <div class="form-group">
                            <label for="sponsor">Sponsor</label>
                            <input type="text" class="form-control" id="producer" placeholder="Sponsor">
                        </div>
                        <div class="form-group">
                            <label for="cit">City</label>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="Arusha">Arusha</option>
                                <option value="Dar es Salaam">Dar es Salaam</option>
                                <option value="Dodoma">Dodoma</option>
                                <option value="Mwanza">Mwanza</option>
                                <option value="Mbeya">Mbeya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cit">Theme</label>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="Drama">Drama</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Adveture">Adventure</option>
                                <option value="Advocacy">Advocacy</option>
                                <option value="Education">Education</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year">Year of Production</label>
                            <input type="text" class="form-control" id="year" placeholder="Year of Production">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Price">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
