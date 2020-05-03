<?php

namespace App\Repositories;

use Spatie\Permission\Models\Role;

class RoleRepository {

    protected $model;

    public function __construct() {
        $this->model = new Role();
    }

    public function all() {
        return $this->model->all();
    }
    
    
    public function getOnly($columns = null) 
    {
        return $this->model->get()->pluck($columns);
    }

}