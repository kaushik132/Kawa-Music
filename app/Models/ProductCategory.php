<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';

    public function products()
    {
        return $this->hasMany(Product::class, 'product_cat_id', 'id');
    }

    public function product_filter()
    {
        return $this->hasMany(ProductFilter::class, 'category_id', 'id');
    }
}
