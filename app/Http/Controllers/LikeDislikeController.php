<?php

namespace App\Http\Controllers;
use App;
use Auth;
use App\LikeDislike;
use Illuminate\Http\Request;

class LikeDislikeController extends Controller
{
    public function create_like($id)
    {
        if( App\LikeDislike::all()->where('user_id', '=', Auth::user()->id)->where('assessment_id', '=', $id)->first() === null)
        {
          LikeDislike::create([
            'user_id' => Auth::user()->id,
            'assessment_id' => $id,
            'like' => 1,
            'assessment_type' => 'like'
          ]);
          return back();
        }
        else {
          return back();
        }
    }

    public function create_dislike($id)
    {
      if( App\LikeDislike::all()->where('user_id', '=', Auth::user()->id)->where('assessment_id', '=', $id)->first() === null)
      {
        LikeDislike::create([
          'user_id' => Auth::user()->id,
          'assessment_id' => $id,
          'like' => 1,
          'assessment_type' => 'dislike'
        ]);
        return back();
      }
      else {
        return back();
      }

    }
}
