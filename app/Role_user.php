<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    //
    protected $table='roles';

    public function permissions()
    {

        return $this->belongsToMany(Permissions::class);
        
    }



    public function  givepermissions(Permissions $permissions)
    {

        return $this->permissions()->save($permissions);

    }

    public function createroles(array  $roles)
    {
        return Static::create($roles);
    }
}


