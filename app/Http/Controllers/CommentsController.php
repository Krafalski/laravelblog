<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function store(Request $request, Post $post)
    {
      return $post;
      // return $request->all(); //json view of posted comment
      // $comment = new Comment;
      //
      //
      // $comment->comment = $request->body;
      //
      // $post->comments()->save($comment);
      //
      // return back();
    }
}
