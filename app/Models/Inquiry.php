<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'product_id',
        'product_title',
        'name',
        'email',
        'phone',
        'address',
        'notes',
    ];
}
