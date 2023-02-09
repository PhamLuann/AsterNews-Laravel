<?php

namespace App\Repositories\Post;

use App\Models\Post;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    public function getModel()
    {
        return Post::class;
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
            ->where('posts.slug', $slug)->first();

        $more = Post::select([
            'posts.*',
            'users.name AS author'
        ])
            ->join('users', 'users.id', 'author_id')
            ->where('category_id', $post->category_id)
            ->where('posts.id', '<>', $post->id)
            ->paginate(10);
        return ['post' => $post, 'more' => $more];
    }

    public function getAllPostWithAuthor()
    {
        $posts = Post::select([
            'posts.*',
            'users.name AS author'
        ])
            ->join('users', 'users.id', 'author_id')
            ->orderBy('id', 'desc')
            ->paginate(20);

        return $posts;
    }

    public function getByCategory($slug){
        $posts = Post::select([
            'posts.*',
            'users.name AS author'
        ])
            ->join('users', 'users.id', 'author_id')
            ->join('categories', 'categories.id', 'posts.category_id')
            ->where('categories.slug', $slug)
            ->orderBy('id', 'desc')
            ->paginate(20);

        return $posts;
    }
}
