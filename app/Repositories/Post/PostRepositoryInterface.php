<?php

namespace App\Repositories\Post;

use App\Repositories\RepositoryInterFace;

interface PostRepositoryInterface extends RepositoryInterFace
{
    /**
     * find post by slug and other post
     * @param $slug
     * @return mixed
     */
    public function show($slug);

    /**
     * get all post in a category by category's slug
     * @param $slug
     * @return void
     */
    public function getByCategory($slug);
}
