<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //use HasFactory;

    protected $Persons = 'Persons'; // Specify the table name if it's different from the model's name

    protected $column = ['id','name', 'imageReference', 'description'];
}
