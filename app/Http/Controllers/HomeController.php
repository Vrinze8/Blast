<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Film $film)
    {
        // $request->user()->authorizeRoles(['employee', 'manager']);

        return view('home', ['films' => $film->all()]);
    }
}
