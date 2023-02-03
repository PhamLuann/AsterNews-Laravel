<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll()
    {
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
        return view('posts.all-post', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $post = Post::select([
            'posts.*',
            'categories.name AS category',
            'categories.id AS category_id',
            'users.name AS author'
        ])
            ->join('users', 'users.id', 'posts.author_id')
            ->join('categories', 'categories.id', 'posts.category_id')
            ->where('slug', $slug)->first();
        $more = Post::select([
            'posts.id',
            'title',
            'slug',
            'description',
            'hero',
            'posts.created_at',
            'users.name AS author'
        ])
            ->join('users', 'users.id', 'author_id')
            ->where('category_id', $post->category_id)
            ->where('posts.id', '<>', $post->id)
            ->paginate(10);
        $categories = Category::all();
        return view('posts.news-feed', compact('post', 'more', 'categories'));
    }
}
