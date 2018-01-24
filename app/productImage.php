<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productImage extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'idno';
    protected $table = 'product_images';
    protected $guarded = [];
}
