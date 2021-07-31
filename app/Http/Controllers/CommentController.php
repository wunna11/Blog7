<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //middleware
    public function __construct()
    {
        $this->middleware('auth');    
    }

    //create comment
    function create() {
        $comment = new Comment();
        $comment->content = request()->content;
        $comment->article_id = request()->article_id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        
        return back();
    }

    //delete comment
    function delete($id) {
        $comment = Comment::find($id);
        
        //authorization
        if(Gate::denies('comment-delete', $comment)) {
            return back()->with('error', 'Unauthorize');
        }
        $comment->delete();
        return back();
   
    }
}
