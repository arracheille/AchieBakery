<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'id_transaction';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_transaction', 'order_id', 'method', 'order_proof'];

    public function orders() {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
