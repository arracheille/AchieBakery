<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id_order';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_order', 'user_id', 'address_id', 'status', 'total_price', 'delivery_date', 'note', 'method'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function address() {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function orderproducts() {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }

    public function transaction() {
        return $this->hasMany(Transaction::class, 'order_id');
    }
}
