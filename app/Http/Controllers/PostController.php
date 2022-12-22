<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(){
        return view('posts.all-post');
    }
    public function show(){
        return view('posts.news-feed');
    }
}
