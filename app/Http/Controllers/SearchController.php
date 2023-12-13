<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SearchController extends Controller
{
    public function searchMovies(Request $request){
        $query = $request->input('movieName');

        $searchedMovies = Movie::where('title','like',"%$query%")->get();


        return view('movie-search-bar', compact('searchedMovies'));
    }
}
