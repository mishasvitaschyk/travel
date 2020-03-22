@extends('admin.layouts.app_admin')

@section('nav')
<li class="nav-item " ><a class="nav-link" href="{{ url('admin') }}">Маркери</a></li>
<li class="nav-item active"><a class="nav-link" href="{{ url('admin/tour') }}">Тури</a></li>
@endsection

@section('content')

<div class="container">

<br />
<div class="" >
  <h3>Додані тури</h1>
  <a href="{{url('admin/createtour')}}" type="submit" class="btn btn-primary" style="float:right;"type="button" > + Додати тур</a>
</div>
<br />
<br />
<div class="tur container jumbotron">
  @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
  @endif
  @foreach($tours as $tour)
    <div class="tur-menu">

      <a href="{{ route('admintourshow',['tour' => $tour->id]) }}">

      <img src="{{asset('/storage/'. $tour->photo)}}" width="100%" height="50%" alt="">
      </a>
      <h4 style="text-align:center;">{{$tour->tour}}</h4>
      <h6 style="text-align:justify;">{{$tour->content}}</h6>
      <h6> Ціна: {{$tour->price}} $</h6>
      <h6>Контакти: +(380)2856458</h6>
      <a href="{{route('edit-tour',$tour->id)}}"><button style="float: left;"  type="button"    class="btn btn-primary" name="button">Редагувати</button></a>
      <a href="{{route('delete_tour',$tour->id)}}"> <button style="float:right;" type="submit" class="btn btn-danger" name="button"> Видалити</button></a>

    </div>
  @endforeach
</div>
</div>
@endsection
