<?php

namespace App\Repositories;

use Spatie\Permission\Models\Permission;

class PermissionRepository 
{

    protected $model;

    public function __construct() 
    {
        $this->model = new Permission();
    }

    public function all() 
    {
        return $this->model->all();
    }

    public function getOnly($columns = null) 
    {
        return $this->model->get()->pluck($columns);
    }

}