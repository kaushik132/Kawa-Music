<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoDetailsInsert extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'video_details_insert';
    protected $fillable = [
        'order_num',
        'video_image',
        'alt',
        'video_url',
        'artist_id',
        'title',
        'view'
    ];
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id', 'id');
    }
}


