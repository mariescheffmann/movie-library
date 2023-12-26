<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Movie;
use App\Models\ActorMovieRelation;

class NewMoviepageController extends Controller
{
    public function show()
    {
        return view('newMoviePage');
    }

    public static function createMovie(Request $request) {
        $title = $request->input('title');
        $duration = $request->input('duration');
        $releaseYear = $request->input('releaseYear');
        $descriptionShort = $request->input('descriptionShort');
        $descriptionLong = $request->input('descriptionLong');
        $rating = $request->input('rating');

        $path = $request->file('fileUpload')->move('pictures/movie-posters', $request->file('fileUpload')->getClientOriginalName());
        $imageReference = preg_replace('/pictures\//', '', $path, 1);

        Movie::insert([[
            'title' => $title, 'duration' => $duration, 'releaseYear' => $releaseYear, 'imageReference' => $imageReference, 'descriptionShort' => $descriptionShort, 'descriptionLong' => $descriptionLong, 'rating' => $rating],
        ]);

        return $imageReference;
    }
}