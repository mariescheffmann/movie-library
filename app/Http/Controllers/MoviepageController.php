<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ActorpageController extends Controller
{
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('moviepage', ['movie' => $movie]);
    }

}
