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

    /* 
    * Delete Comment
    */ 
    public function destroy($id) {
        $comment = MockupComment::where('id', $id)->delete();
        

        return redirect('commenthistory')->with('success',' comment deleted!');
    }

}