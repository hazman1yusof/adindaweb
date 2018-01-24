<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\productImage;

class Product extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'idno';
    protected $table = 'product';
    protected $guarded = [];


	public function images()
	{
	    return $this->hasMany(productImage::class, 'product_id');
	}

}
