<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    //
    public function index()
  {
    $posts = Post::orderBy('id', 'desc')->get();
    return view('posts.index', ['posts' => $posts ]);
  }

    public function create(Request $request)
  {

    Post::create($request->all());
    return redirect('/');

  }

  public function edit(Request $request)
  {
    return view('posts.edit');
  }
}
