<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //asignacion masiva, nada es protegido
    protected $guarded = [];

    // relacion one to many polimorfica
    public function imageable(){
        return $this->morphTo();
    }
}
