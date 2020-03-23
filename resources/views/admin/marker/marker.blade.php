@extends('admin.layouts.app_admin')
@section('nav')
<li class="nav-item active" ><a class="nav-link" href="{{ url('admin') }}">Маркери</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('admin/tour') }}">Тури</a></li>
@endsection
@section('content')
<div class="container">
  <br />
  <div class="">
    <a href="{{url('admin/createmarker')}}" type="submit" class="btn btn-primary" style="float:right;"type="button" > + Додати маркери</a>
      <h3>Додані маркери</h1>
        <br />

  </div>
  <div class="tur container jumbotron">
    @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
    @endif
    @foreach ( $markers as $marker )

      <div class="tur-menu">
        <a href="/marker/{{$marker->id}}">

          <img  width="100%" height="55%" src="{{asset('/storage/'. $marker->image)}}" alt="">
        <h5 style="text-align:center;">{{$marker->title}}</h5>
        <h6> Lat: {{$marker->lat}} </h6>
        <h6>Lng: {{$marker->lng}} </h6>

        <a href="{{route('edit-marker', $marker->id)}}"><button style="float: left;"  type="button"    class="btn btn-primary" name="button">Редагувати</button></a>
      <a href="{{route('delete', $marker->id)}}">  <button style="float:right;" type="submit" class="btn btn-danger" name="button"> Видалити</button></a>



        </div>

    @endforeach
  </div>
  <div class="container">
    <p style="text-align:center">{{$markers->links()}}</p>
  </div>

</div>
@endsection
