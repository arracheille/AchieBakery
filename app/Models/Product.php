<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_product';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_product', 'category_id', 'product_name', 'product_img', 'product_description', 'product_price', 'product_size'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
