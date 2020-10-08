<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Resources\Comment as CommentResource;
use App\Http\Resources\CommentCollection;

class CommentController extends Controller
{
    //
    function index(){
        $comments = Comment::all();
        // $comments = Comment::paginate(2);
        return new CommentCollection($comments);
    }

    function comms(Request $request, $id){
        $comment = Comment::find($id);
        return new CommentResource($comment);
    }

}
