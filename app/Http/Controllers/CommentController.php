<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return view('comment.comments')->with(
            [
                'comments' => Comment::with('author','post')->paginate()
            ]
        );
    }
}
