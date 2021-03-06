<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function isadmin(){
        //will look for admin column in database
        return $this->admin;
    }



    public function advertise()
    {
        return $this->hasMany(advertise::class);
    }



    public function hospitals()
    {
        return $this->belongsTo(hospital::class);
    }
}



