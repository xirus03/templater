<?php

namespace App\Repositories;

use App\Models\Access\User;

class UserRepository {
    
    protected $model;

    public function __construct() {
        $this->model = New User();
    }

    public function all() {
        return $this->model->with('roles')->get();
    }

    public function findById($user_id) {
        return $this->model->where('id', $user_id)->firstOrFail();
    }

    public function create($values) {
        $values['password'] = bcrypt($values['password']);
        $user = $this->model->firstOrCreate(
            $values->only($this->model->getFillable())
        );

        // assign roles for created user
        foreach($values['roles'] as $role) {
            $user->assignRole($role);
        }
    }

}

?>