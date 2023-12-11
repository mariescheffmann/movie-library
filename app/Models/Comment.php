<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $keyType = 'string'; 
    // use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['movie', 'comment'];

    public function movie() {
        return $this->belongsTo(Movie::class, 'movieId');
    }


}