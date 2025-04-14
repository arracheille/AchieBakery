<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $primaryKey = 'id_moment';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id_moment', 'moment_img', 'moment_name', 'moment_description'];

    public function momentcategories() {
        return $this->hasMany(MomentCategory::class, 'moment_id');
    }
}
