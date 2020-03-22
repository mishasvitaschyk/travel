<?php

namespace App\Http\Controllers\Admin;
use App;
use App\Marker;
use App\Comment;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\MarkerRequest;

use App\Http\Controllers\Controller;

class AdminMarkerController extends Controller
{
    public function index()
    {
    $markers = App\Marker::paginate(12);
    return view('admin.marker.marker', compact('markers'));
    }

    public function create()
    {
        return view('admin.marker.marker_create');
    }

    public function store(MarkerRequest $req)
    {
        $path = $req->file('image')->store('uploads', 'public');
        Marker::create([
            'title'=>request('title'),
            'content'=> request('content'),
            'latlng'=> request('latlng'),
            'image'=> $path,
        ]);

        return back()->with('success','Дані були добавлені');
    }

    public function show($id)
    {
      $marker = App\Marker::find($id);
      return view('admin.marker.marker_show', compact('marker'));
    }

    public function edit_marker($id)
    {
        $marker = App\Marker::find($id);
        return view('admin.marker.marker_edit', compact('marker'));
    }

    public function update($id, MarkerRequest $req)
    {
        Marker::find($id)->update([
            'title'=>request('title'),
             'content'=> request('content'),
             'latlng'=> request('latlng'),
             'image'=> request('image')
        ]);

        return redirect('/admin')->with('success','Дані було оновлено');
      }

      public function delete($id)
      {
         $namephoto = App\Marker::find($id)->value('image');
         Storage::delete($namephoto);
         Marker::find($id)->delete();
         return back();
      }
}
