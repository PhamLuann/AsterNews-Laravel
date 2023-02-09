<?php

namespace App\Repositories\Category;

use App\Repositories\RepositoryInterFace;

interface CategoryRepositoryInterface extends RepositoryInterFace
{
    /**
     * to get a category using slug
     * @param $slug
     * @return mixed
     */
    public function getIdBySlug($slug);
}
