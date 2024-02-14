<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function supplier()
    {
      return $this->belongsTo('App\Supplier');
    }

    public function order_product() {
        return $this->hasMany(OrderProduct::class);
    }

}
