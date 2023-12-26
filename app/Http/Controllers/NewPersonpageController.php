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

    public function showUpdate($id)
    {
        $person = Person::find($id);

        return view('updatePersonPage', ['person' => $person]);
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

    public static function updatePerson(Request $request, $id) {
        $name = $request->input('name');
        $birthday = $request->input('birthday');
        $nationality = $request->input('nationality');
        $biography = $request->input('biography');
        
        $person = Person::find($id);

        if ($person->name != $name) {
            $person->name = $name;
        }

        if ($person->birthday != $birthday) {
            $person->birthday = $birthday;
        }

        if ($person->nationality != $nationality) {
            $person->nationality = $nationality;
        }

        if ($person->biography != $biography) {
            $person->biography = $biography;
        }

        if ($path = $request->file('fileUpload') != null) {
            $path = $request->file('fileUpload')->move('pictures/actor-pictures', $request->file('fileUpload')->getClientOriginalName());
            $imageReference = preg_replace('/pictures\//', '', $path, 1);
            $person->imageReference = $imageReference;
        }

        $person->save();
        return redirect('actor/' . $id)->with('success',' person updated!');
    }

    public function deletePerson($id)
    {
        Person::find($id)->delete();
        return redirect('frontpage')->with('success',' person deleted!');
    }

}