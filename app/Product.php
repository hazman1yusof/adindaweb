<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\productImage;
use App\Category;

class Product extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'idno';
    protected $table = 'product';
    protected $guarded = [];


	public function images(){
	    return $this->hasMany(productImage::class, 'product_id');
	}

	public function first_image(){
	    return $this->hasMany(productImage::class, 'product_id')->limit(1);
	}

	// public function category(){
	//     return $this->belongsTo(Category::class, 'catcode');
	// }

	public function category(){
	    return Category::select('description')->where('catcode','=',$this->productcat)->first();
	}
}
