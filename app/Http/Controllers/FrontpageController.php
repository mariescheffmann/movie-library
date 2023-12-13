<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Movie;
use App\Models\Person;



class FrontpageController extends Controller
{


    public function getInfo()
    {
        $movies = $this->getMovies();
        $actors = $this->getActors();

        return View::make('frontpage', [
            'movies' => $movies,
            'actors' => $actors
        ]);
    }

    public function getMovies()
    {
        $movies = Movie::all()->toArray();

        return $movies;
    }

    public function getActors()
    {
        $persons = Person::all()->toArray();

        return $persons;
    }
}
