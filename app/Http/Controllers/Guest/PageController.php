<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getMovies()
    {

        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
