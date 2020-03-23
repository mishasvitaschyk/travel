<?php

namespace App\Http\Controllers;
use App\Tour;
use App;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = App\Tour::paginate(12);
    public function show($id)
    {
        $tour = App\Tour::find($id);
        return view('tour.tour_show', compact('tour'));
    }
}
