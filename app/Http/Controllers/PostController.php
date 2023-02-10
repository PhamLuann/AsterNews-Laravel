<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;
    protected $categories;

    public function __construct(PostRepositoryInterface $postRepositoryInterface, CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        $this->postRepository = $postRepositoryInterface;
        $this->categoryRepository = $categoryRepositoryInterface;
        $this->categories = $this->categoryRepository->getAll();
    }

    public function getAll()
    {
        $posts = $this->postRepository->getAllPostWithAuthor();
        $categories = $this->categories;
        return view('posts.all-post', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $posts = $this->postRepository->show($slug);
        $post = $posts['post'];
        $more = $posts['more'];
        $categories = $this->categories;
        return view('posts.news-feed', compact('post', 'more', 'categories'));
    }

    public function getByCategory($slug){
        $posts = $this->postRepository->getByCategory($slug);
        $categories = $this->categories;
        return view('posts.all-post', compact('posts', 'categories'));
    }
}
