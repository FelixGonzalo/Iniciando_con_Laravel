<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // obtener la data de la relacion one to one
    public function profile(){
        // $profile = Profile::where('user_id', $this->id)->first();
        // return $profile;

        // $profile = Profile::where('foreign_key', $this->local_key)->first();
        // lo de arriba seria esto => return $this->hasOne('App\Model\Profile', 'foreign_key','local_key');

        return $this->hasOne('App\Models\Profile');

        //mas reducido
        //return $this->hasOne(Profile::class);
    }

    // relacion one to many
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    //relacion many to many relations
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    //relacion one to many polimorfication
    // imageable es el metodode Image
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}

// $user->profile