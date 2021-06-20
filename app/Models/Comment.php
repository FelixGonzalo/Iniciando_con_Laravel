<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    //relacion uno a muchos inverson
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relaciones one to many polimorfica
    public function commentable(){
        return $this->morphTo();
    }
}
