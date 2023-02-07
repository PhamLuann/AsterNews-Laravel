<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $posts = Post::select([
            'posts.id',
            'title',
            'slug',
            'description',
            'hero',
            'posts.created_at',
            'users.name AS author'
        ])
            ->join('users', 'users.id', 'author_id')
            ->paginate(20);
        $categories = Category::all();
        return view('index', compact('posts', 'categories'));
    }
}
