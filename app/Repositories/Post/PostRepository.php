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
        $post = $this->model->select([
            'posts.*',
            'categories.name AS category',
            'categories.id AS category_id',
        ])
            ->join('categories', 'categories.id', 'posts.category_id')
            ->where('posts.slug', $slug)->first();

        $more = $this->model->select([
            'posts.*',
        ])
            ->where('category_id', $post->category_id)
            ->where('posts.id', '<>', $post->id)
            ->paginate(10);
        return ['post' => $post, 'more' => $more];
    }

    public function selectPaginate($paginate)
    {
        return $this->model->orderBy('created_at', 'desc')->paginate($paginate);
    }

    public function getByCategory($slug){
        $posts = Post::select([
            'posts.*',
        ])
            ->join('categories', 'categories.id', 'posts.category_id')
            ->where('categories.slug', $slug)
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return $posts;
    }
}
