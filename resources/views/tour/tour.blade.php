@extends('layouts.app')

@section('nav')
<li class="nav-item "><a class="nav-link"href="{{url('/')}}">Головна</a></li>
<li class="nav-item active"><a class="nav-link" href="{{url('/tour')}}">Список турів</a></li>
@endsection

@section('content')

<div class="container">

<br />

<br />
<br />


<div class="tur container jumbotron">
  @foreach($tours as $tour)
    <div class="tur-menu">

      <a href="{{ route('tourshow',['tour' => $tour->id]) }}">
      <img src="{{asset('/storage/'. $tour->photo)}}" width="100%" height="50%" alt="">
      </a>
      <h4 style="text-align:center;">{{$tour->tur}}</h4>
      <h6 style="text-align:justify;">{{$tour->content}}</h6>
      <h6> Ціна: {{$tour->price}} $</h6>
      <h6>Контакти: +(380)2856458</h6>

    </div>
  @endforeach
</div>
</div>
@endsection
