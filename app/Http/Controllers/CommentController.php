<?php

namespace App\Http\Controllers;
use App;
use App\Comment;
use Auth;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function marker_comment_store($id, CommentRequest $error)
  {
    Comment::create([
      'comment'=>request('comment'),
      'commentable_id'=>$id,
      'post_id'=>$id,
      'commentable_type'=>'App\Marker',
      'user'=> Auth::user()->name,
      'user_id'=> Auth::user()->id

    ]);
  return back();
  }

  public function tour_comment_store($id, CommentRequest $error)
  {
    Comment::create([
      'comment' => request('comment'),
      'post_id' => $id,
      'user' => Auth::user()->name,
      'user_id' => Auth::user()->id,
      'commentable_id'=>$id,
      'commentable_type'=>'App\Tour'

    ]);
  return back();
  }
    
  public function comment_delete($id)
  {
    Comment::find($id)->delete();
    return back();
  }
  
  public function comment_edit($id)
  {
    return back();
  }
}
