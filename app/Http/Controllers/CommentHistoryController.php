<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\MockupComment;


class CommentHistoryController extends Controller
{

    public function getMockupComments()
    {
        $mockupComments = MockupComment::all()->toArray();

        return View::make('commentHistory', [
            'mockupComments' => $mockupComments
        ]);
    }
}