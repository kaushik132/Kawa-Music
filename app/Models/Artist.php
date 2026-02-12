<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'artist';

    protected $casts = [
        'videos_itinary' => 'array',
    ];


    public function videositinary()
    {
        return $this->hasMany(VideoDetailsInsert::class, 'artist_id', 'id');
    }
    public function instagramitinary()
    {
        return $this->hasMany(Instagram::class, 'artistname_id', 'id');
    }


}
