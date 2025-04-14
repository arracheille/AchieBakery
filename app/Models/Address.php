<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = 'id_address';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_address', 'user_id', 'location_name', 'location_address', 'latitude', 'longitude'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders() {
        return $this->hasMany(Order::class, 'address_id');
    }
}
