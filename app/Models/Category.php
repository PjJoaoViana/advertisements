<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class,  'id_category');
    }
}
