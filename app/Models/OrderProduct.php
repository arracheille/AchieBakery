<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $primaryKey = 'id_order_product';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_order_product', 'product_id', 'order_id', 'quantity'];

    public function order() {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
