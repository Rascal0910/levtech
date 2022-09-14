<?php

namespace App\Http\Controllers;

use app\category;
use App\Post;
use App\Http\Requests\PostRequest; // useする
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['posts' => $post]);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Post $post, PostRequest $request) // 引数をRequest->PostRequestにする
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}