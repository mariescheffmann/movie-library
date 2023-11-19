<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Movie;
use App\Models\ActorMovieRelation;

class ActorpageController extends Controller
{
    public function show($actorid)
    {
        $actor = Actor::find($actorid);
        $movieIds = ActorMovieRelation::where('actorId', $actorid)->get();
        $movies = array();

        foreach ($movieIds as &$value) {
            array_push($movies, Movie::find($value));
        }

        return view('actorpage', ['actor' => $actor, 'movies'=>$movies]);
    }
}