<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        if (empty($movies)) {
            abort(404);
        }
        return view("home", compact("movies"));
    }

    public function detail($id)
    {
        $movie = Movie::find($id);
        if (empty($movie)) {
            abort(404);
        }
        return view("movie_detail", compact("movie"));
    }
}
