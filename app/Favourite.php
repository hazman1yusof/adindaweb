<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'idno';
    protected $table = 'favourites';
    protected $guarded = [];
}
