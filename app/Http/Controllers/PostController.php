<?php

namespace App\Http\Controllers;

use app\Category;
use App\Post;
use App\Http\Request\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(Post $post)
{
    return view('index')->with(['posts' => $post->getPaginateByLimit()]);
} 
    //上記　posts indexでは開かなかった。カリキュラムとは違うことに気をつける。

public function show(Post $post)
{
    return view('show')->with(['posts' => $post]);
}
}
?>
