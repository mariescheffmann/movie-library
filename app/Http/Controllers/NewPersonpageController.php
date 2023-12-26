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

    public static function createPerson(Request $request) {
        $name = $request->input('name');
        $birthday = $request->input('birthday');
        $releaseYear = $request->input('releaseYear');
        $biography = $request->input('biography');

        $path = $request->file('fileUpload')->move('pictures/actor-pictures', $request->file('fileUpload')->getClientOriginalName());
        $imageReference = preg_replace('/pictures\//', '', $path, 1);

        Person::insert([[
            'name' => $name, 'birthday' => $birthday, 'nationality' => $nationality, 'imageReference' => $imageReference, 'biography' => $biography],
        ]);

        return $imageReference;
    }
}