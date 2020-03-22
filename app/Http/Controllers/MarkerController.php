<?php

namespace App\Http\Controllers;
use App;
use App\Marker;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\MarkerRequest;

class MarkerController extends Controller
{
    public function indexuser()
    {
        $markers=App\Marker::paginate(25);
        return view('marker.welcome', compact('markers'));
    }

    public function show($id)
    {
        $marker = App\Marker::find($id);
        return view('marker.marker_show', compact('marker'));
    }

}
