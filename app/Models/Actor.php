<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //use HasFactory;

    protected $Actors = 'Actors'; // Specify the table name if it's different from the model's name

    protected $column = ['id','name', 'image_link', 'description'];
}
