<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $casts = [
        'key_features' => 'array',
        'specifications' => 'array',
        'gallery' => 'array',
        'product_filter' => 'array',

    ];


    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_cat_id', 'id');
    }

    
}
