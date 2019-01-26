<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('film');
    }

    public function create(Request $request)
    {
        dd($request-all());

        // $film = Film::create([
        //     'title' => $request->title,
        //     'producer' => $request->producer
        // ]);
    }
}
