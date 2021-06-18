<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $table = "users"; indicas explicitamente a que tabla hace referencia

    //para asignacion masiva, toma los campos y ignora el resto
    protected $fillable = ['name', 'description', 'category'];
    // al reves de fillable, ignora los otros compos y llena el resto
    // protected $guarded = ['status'];

    //para cambiar el id por defecto por el slug para ruta amigable
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
