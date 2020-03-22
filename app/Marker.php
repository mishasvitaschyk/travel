<?php

namespace App;
use App;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    protected $fillable = ['id', 'title', 'content', 'latlng', 'image'];
}
