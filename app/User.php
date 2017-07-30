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
        'name', 'email', 'password', 'api_token', 'photo', 'address', 'gender', 'phone', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token', 'photo', 'address', 'gender', 'phone', 'status',
    ];

    public static function initialize(){
      return [
        'photo'   => '',
        'address' => '',
        'gender'  => 0,
        'phone'   => '',
        'status'  => ''
      ];
    }

    public function posts(){
      return $this->hasMany(Post::class);
    }
}
