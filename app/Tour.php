<?php

namespace App;
use App;
use App\Comment;
use App\LikeDislike;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
  public function comments()
  {
      return $this->morphMany('App\Comment', 'commentable');
  }

  public function likes()
  {
     return $this->hasMany('App\LikeDislike', 'assessment_id');
  }

    protected $fillable = ['id','tour','content', 'price', 'photo'];
}
