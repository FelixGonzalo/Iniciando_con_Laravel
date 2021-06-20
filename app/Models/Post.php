<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // relacion one to many inverso

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    //relacion one to many polimorfication
    // imageable es el metodode Image
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //relacion one to many polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }


    //relacion muchos amuchos polimorficas
    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable')
    }
}
