<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id_category';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_category', 'category_img', 'category_name', 'category_description'];

    public function products() {
        return $this->hasMany(Product::class, 'product_id');
    }
}
