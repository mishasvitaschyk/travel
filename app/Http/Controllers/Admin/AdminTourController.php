<?php

namespace App\Http\Controllers\Admin;
use App\Tour;
use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;

class AdminTourController extends Controller
{
    public function index()
    {
      $tours = App\Tour::paginate(12);
      return view('admin.tour.admintour', compact('tours'));
    }

    public function create()
    {
      return view('admin.tour.tour_create');
    }

    public function store(TourRequest $tour)
    {
      $photo = $tour->file('image')->store('uploads', 'public');
      Tour::create([
        'tour' => request('tour'),
        'content' => request('content'),
        'price' => request('price'),
        'photo' => $photo,
      ]);
      return back()->with('success','Дані були добавлені');
    }

    public function show($id)
    {
      $tour = App\Tour::find($id);
      return view('admin.tour.tour_show', compact('tour'));
    }

    public function edit($id)
    {
      $tour = App\Tour::find($id);
      return view('admin.tour.edit_tour', compact('tour'));
    }

    public function delete($id)
    {
      Tour::find($id)->delete();
      return back();
    }

    public function update_tur($id)
    {
      Tour::find($id)->update([
        'tour' => request('tour'),
        'content' => request('content'),
        'price' => request('price'),
        'photo' => request('photo'),
      ]);
      return redirect('/admin/tour')->with('success','Дані були оновлені');
    }
}
