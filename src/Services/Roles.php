<?php

namespace Smylmrz\Dashboard\Services;

use Exception;
use Smylmrz\Dashboard\Models\Role;

class Roles {

    public static function create()
    {
        $roles = config('smyl.roles');

        if(config()->has('smyl.roles')) {
            foreach($roles as $role)
            {
                Role::create([
                    'name' => $role
                ]);
            }
        } else{
            throw new Exception('Please publish the config file');
        }
    }
}