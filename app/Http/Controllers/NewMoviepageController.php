<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\ActorMovieRelation;

class NewMoviepageController extends Controller
{
    public function show()
    {
        return view('newMoviePage');
    }

    public function showUpdate($id)
    {
        $movie = Movie::find($id);

        return view('updateMoviePage', ['movie' => $movie]);
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

    public static function updateMovie(Request $request, $id) {
        $title = $request->input('title');
        $duration = $request->input('duration');
        $releaseYear = $request->input('releaseYear');
        $descriptionShort = $request->input('descriptionShort');
        $descriptionLong = $request->input('descriptionLong');
        $rating = $request->input('rating');
        
        $movie = Movie::find($id);

        if ($movie->title != $title) {
            $movie->title = $title;
        }

        if ($movie->duration != $duration) {
            $movie->duration = $duration;
        }

        if ($movie->releaseYear != $releaseYear) {
            $movie->releaseYear = $releaseYear;
        }

        if ($movie->descriptionShort != $descriptionShort) {
            $movie->descriptionShort = $descriptionShort;
        }

        if ($movie->descriptionLong != $descriptionLong) {
            $movie->descriptionLong = $descriptionLong;
        }

        if ($movie->rating != $rating) {
            $movie->rating = $rating;
        }

        if ($path = $request->file('fileUpload') != null) {
            $path = $request->file('fileUpload')->move('pictures/movie-posters', $request->file('fileUpload')->getClientOriginalName());
            $imageReference = preg_replace('/pictures\//', '', $path, 1);
            $movie->imageReference = $imageReference;
        }

        $movie->save();
        return redirect('movie/' . $id)->with('success',' movie updated!');
    }

    public function deleteMovie($id)
    {
        Movie::find($id)->delete();
        return redirect('frontpage')->with('success',' movie deleted!');
    }
}