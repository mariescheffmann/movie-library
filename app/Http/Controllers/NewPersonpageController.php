<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Movie;
use App\Models\ActorMovieRelation;

class NewPersonpageController extends Controller
{
    public function show()
    {
        return view('newPersonPage');
    }

    public static function createPerson($name) {
        return $name;
    }
}