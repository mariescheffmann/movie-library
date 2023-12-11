<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Comment;


class CommentHistoryController extends Controller
{

    public function getComments()
    {
        $Comments = Comment::all();

        # Debugging test
        dump($Comments[0]);
        dump($Comments[0]->movie);
        dump($Comments[0]->movie->comments);

        return View::make('commentHistory', [
            'Comments' => $Comments
        ]);
    }

    /* 
    * Delete Comment
    */ 
    public function destroy($id) {
        $comment = Comment::where('id', $id)->delete();
        

        return redirect('commenthistory')->with('success',' comment deleted!');
    }

}