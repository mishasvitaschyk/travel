@extends('layouts.app')
@section('nav')
<li class="nav-item " ><a class="nav-link" href="{{ url('admin') }}">Маркери</a></li>
<li class="nav-item active"><a class="nav-link" href="{{ url('admin/tur') }}">Тури</a></li>
@endsection

@section('content')
<div  style="text-align: center;" class="container">
  <div class="col-sm-1">

  </div>
  <div class="jumbotron col-sm-10">
    <p style="text-align:center;"><img width="90%"src="{{asset('/storage/'. $tour->photo)}}" alt=""></p>
    <h4>{{$tour->tour}}</h4>
    <h5 style="text-align:justify;">{{$tour->content}}</h5>
    <h6> Ціна: {{$tour->price}} $</h6>
    <h6>Контакти: +(380)2856458</h6>
    @foreach($tour->tourcomments as $comment)
        <div style="border:white solid 1px;border-radius:7px;" class="">
          <div id="app"class="" style="background:white;
          padding:10px;margin: 5px;
          border-radius:7px;" class="">
            <h5 style="text-align:left;"><i class="glyphicon glyphicon-user"> </i> <b>{{$comment->user}}</b></h5>
            <h5 style="text-align:left;">{{$comment->comment}}</h5>
            <h6 style="float:left;margin-left: 5px;margin-top:-10px;"><i style="color: #317AAF;" class="glyphicon glyphicon-heart"> 0</i></h6> <h6 style="float:right;margin-top:-10px;">{{$comment->created_at}}</h6>
          </div>
        </div>
        @endforeach
        <form action = "{{route('tour-comments',$tour->id)}}" method = "POST">
          {{csrf_field()}}
           <div style="position:relative;;" class="form-group">
            <br />

            @include('errors.errors')
             <textarea name="comment" class="form-control" rows="1" placeholder="Коментувати" cols="1"></textarea><button style="" class="btn"type="submit" name="button"><img style="float:right;margin-top: -53px;margin-right: -100px;border:white solid 1px;" height="10%" width="7%"  src="https://image.flaticon.com/icons/png/512/2390/2390175.png" alt=""></button>

           </br><br />



           </div>

        </form>
        <div class="card">
          <div class="card-blok">

          </div>

        </div>
  </div>
</div>

@endsection
