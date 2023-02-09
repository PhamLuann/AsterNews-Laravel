<?php

namespace App\Repositories;

interface RepositoryInterFace
{
    /**
     * getAll post
     * @return mixed
     */
    public function getAll();

    /**
     * get one by id
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * create a record
     * @param $object
     * @return mixed
     */
    public function create($object);
}
