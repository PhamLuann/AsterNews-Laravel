<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterFace
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get this Model
     * @return Model
     */
    abstract public function getModel();

    public function setModel(){
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create($object)
    {
        $object->save();
        return $object->id;
    }

    public function selectPaginate($paginate)
    {
        return $this->model->paginate($paginate);
    }

    public function getBySlug($slug)
    {
        $record = $this->model->select('id')->where('slug', $slug)->first();
        return $record;
    }
}
