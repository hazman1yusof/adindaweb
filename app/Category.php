<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'idno';
    protected $table = 'category';
    protected $guarded = [];

    public function products(){
	    return $this->hasMany(Product::class, 'catcode');
	}

}
