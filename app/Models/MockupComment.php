<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockupComment extends Model
{
    use HasFactory;

    protected $MockupComments = 'mockup_comments'; //same name as table in database
    protected $fillable = [
        'content'
    ];
}
