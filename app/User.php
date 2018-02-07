<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $primaryKey = 'idno';
    protected $table = 'users';
    protected $guarded = [];

    public function favourites(){
	    return $this->hasMany(Favourite::class, 'user_id');
	}
}
