<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use DB;
use App\Post; //from eloquent make:model

class PostsController extends Controller
{
    public function index()
    {
      // $posts = DB::table('posts')->get();
      $posts = Post::all();
      return view ('posts.index', compact('posts'));
    }

    public function show($id)
    {
      $post = Post::find($id);
       //$post = DB::table('posts')->find($id);
      return view ('posts.show', compact('post'));
    }
}
