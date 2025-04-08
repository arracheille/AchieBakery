<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey = 'id_cart';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_cart', 'user_id', 'product_id', 'quantity', 'is_checked'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
