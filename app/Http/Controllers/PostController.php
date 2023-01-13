<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(){
        return view('posts.all-post');
    }
    public function show(){
        $post = Post::find(1);
        return view('posts.news-feed', compact('post'));
    }
}
