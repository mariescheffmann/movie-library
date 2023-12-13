<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Comment;


class CommentHistoryController extends Controller
{

    public function getComments()
    {
        # get which user is logged in from auth, and query in model Comment based on that.
        $user = auth()->user();
        $Comments = Comment::where('user', $user['id'])->get();

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