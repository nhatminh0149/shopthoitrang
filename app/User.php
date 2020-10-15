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
        'username', 'email', 'password', 'hoten', 'sdt', 'trangthai'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function danhgia(){
        return $this->hasMany('App\danhgia', 'id', 'id');
    }
    public function dondonhang(){
        return $this->hasMany('App\dondonhang', 'id', 'id');
    }
}
