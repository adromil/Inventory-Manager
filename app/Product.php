<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = true;

    public function category()
		{
			return $this->belongsTo('App\ProductCategory');
		}

    public function stock()
    {
      return $this->hasMany('App\ProductStock');
    }

//    public function order_products() {
//        return $this->hasMany('App\OrderProduct', 'product_id', 'id');
//    }

}
