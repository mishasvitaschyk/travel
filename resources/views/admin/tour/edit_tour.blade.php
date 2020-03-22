@extends('admin.layouts.app_admin')
@section('nav')
<li class="nav-item " ><a class="nav-link" href="{{ url('admin') }}">Маркери</a></li>
<li class="nav-item active"><a class="nav-link" href="{{ url('admin/tour') }}">Тури</a></li>
@endsection
@section('content')
<br />
<div   class="container">
  <div class="col-sm-2">

      </div>
  <div class="jumbotron col-sm-8">
    @include('errors.errors')
    <form action = "{{route('update_tour', $tour->id)}}" method = "post">
      {{csrf_field()}}

      <div style="position:relative;;" class="form-group">
        <label  for="">Введіть назву туру:</label><br />
        <input type="text" class="form-control" size="30%"name="tur" value="{{$tour->tour}}"><br />
        <label for="">Введіть опис туру:</label><br />
        <textarea class="form-control" name="content" rows="4" cols="80">{{$tour->content}}</textarea>
        <label for="">Вкажіть ціну:</label><br />
        <input type="text"class="form-control" size="30%" name="price"  placeholder="$"value="{{$tour->price}}"><br />
        <label for="">Виберіть фото:</label><br />
        <input type="file" class="form-control" size="30%"name="image"  placeholder="photo"value="{{$tour->photo}}"><br /><br />

         <button class="btn btn-primary"    type = 'submit' value = "Додати запис">Оновити</button>
      </div>

    </form>

  </div>
</div>


@endsection
