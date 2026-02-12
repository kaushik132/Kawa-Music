<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{

  protected $primaryKey = 'id';
    protected $table = 'instgram';
     protected $fillable = [
        'order_num',
        'artistname_id',
        'image',
        'alt',
        'likes_num',
        'comment_num',
        'post_title'
    ];

    public function art()
    {
        return $this->belongsTo(Artist::class, 'artistname_id', 'id');
    }
}
