<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    protected $fillable = ['id', 'user_id', 'like', 'assessment_type', 'assessment_id'];
}
