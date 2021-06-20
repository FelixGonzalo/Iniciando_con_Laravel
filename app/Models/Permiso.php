<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    //relacion de muchos a muchos
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
