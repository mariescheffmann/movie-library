<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorMovieRelation extends Model
{
    // use HasFactory;

    protected $table = 'movieActorRelations';

    protected $fillable = ['id', 'actorId', 'movieId'];


}