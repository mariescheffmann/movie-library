<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviepageController extends Controller
{
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('moviepage', ['movie' => $movie]);
    }

}
