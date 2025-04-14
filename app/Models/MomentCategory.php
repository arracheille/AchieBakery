<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MomentCategory extends Model
{
    protected $primaryKey = 'id_momcat';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_momcat', 'category_id', 'moment_id'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id_category');
    }

    public function moments() {
        return $this->belongsTo(Moment::class, 'moment_id');
    }
}
