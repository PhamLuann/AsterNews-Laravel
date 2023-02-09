<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;

    public function __construct(PostRepositoryInterface $postRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }

    //
    public function index(){
        $posts = $this->postRepository->getAllPostWithAuthor();
        $categories = $this->categoryRepository->selectPaginate(8);
        return view('index', compact('posts', 'categories'));
    }
}
