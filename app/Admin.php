<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $primaryKey = 'idno';
    protected $table = 'admins';
    protected $guarded = [];
}
