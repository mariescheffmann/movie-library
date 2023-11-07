<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Movie;


class FrontpageController extends Controller
{


    public function getMovies()
    {
        $movies = Movie::all()->toArray();

        return View::make('frontpage', [
            'movies' => $movies
        ]);
    }
}
