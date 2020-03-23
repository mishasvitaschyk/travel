<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentable()
    {
        return $this->morphTo();
    }
  
    protected $fillable = ['comment', 'user_id', 'user', 'commentable_id', 'commentable_type'];
}
