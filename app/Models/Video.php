<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //relacion one to many inverso
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion one to many polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    //relacion muchos a muchos polimorficas
    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable')
    }
}
