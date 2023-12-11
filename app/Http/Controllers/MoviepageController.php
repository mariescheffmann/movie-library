<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Actor;
use App\Models\Comment;
use App\Models\ActorMovieRelation;
use App\Models\DirectorsMovieRelation;
use App\Models\ProducersMovieRelation;
use Illuminate\Support\Facades\Route;


class MoviepageController extends Controller
{
    public function show($id)
    {
        $movie = Movie::find($id);
        
        $ActorIds = ActorMovieRelation::where('movieId', $id)->get();
        $actors = array();
        foreach ($ActorIds as &$value) {
            array_push($actors, Actor::find($value));
        }

        $DirectorIds = DirectorsMovieRelation::where('movieId', $id)->get();
        $directors = array();
        foreach ($DirectorIds as &$value) {
            array_push($directors, Actor::find($value));
        }

        $ProducerIds = ProducersMovieRelation::where('movieId', $id)->get();
        $producers = array();
        foreach ($ProducerIds as &$value) {
            array_push($producers, Actor::find($value));
        }

        return view('moviepage', ['movie' => $movie, 'id' => $id, 'actors' => $actors, 'directors' => $directors, 'producers' => $producers, 'test' => 'test']);
    }

    public static function insertComment($id, $inputValue) {
        Comment::insert([
            ['movieId' => $id, 'comment' => $inputValue],
        ]);
    }
}
