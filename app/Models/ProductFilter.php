<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFilter extends Model
{
    protected $table = 'product_filter';

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    
}
