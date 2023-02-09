<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{

    public function getModel()
    {
        return Category::class;
    }


    public function getIdBySlug($slug)
    {
        $id = $this->model->select('id')->where('slug', $slug)->first();
        return $id->id;
    }
}
