<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quantity_product extends Model
{

    protected $table = 'quantity_product';

    public function cart()
    {
        return $this->hasMany('app\Models\cart', 'Cart_ID', 'ID');
    }

    public function product()
    {
        return $this->hasOne('app\Models\product', 'Product_ID', 'ID');
    }
}