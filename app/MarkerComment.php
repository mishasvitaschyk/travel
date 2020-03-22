<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkerComment extends Model
{
     protected $fillable = ['comment', 'marker_id', 'user_id', 'user'];
}
