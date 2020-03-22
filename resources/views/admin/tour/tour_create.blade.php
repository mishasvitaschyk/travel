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
    <form action = "/create" enctype="multipart/form-data" method = "post">
      {{csrf_field()}}

      <div style="position:relative;;" class="form-group">
        <label  for="">Введіть назву туру:</label><br />
        <input type="text" class="form-control" size="30%"name="tour" value=""><br />
        <label for="">Введіть опис туру:</label><br />
        <textarea class="form-control" name="content" rows="4" cols="80"></textarea>
        <label for="">Вкажіть ціну:</label><br />
        <input type="text"class="form-control" size="30%" name="price"  placeholder="$"value=""><br />
        <label for="">Виберіть фото:</label><br />
        <input type="file" class="form-control" size="30%"name="image"  value=""><br /><br />

         <button class="btn btn-primary"    type = 'submit' value = "Додати запис">Додати запис</button>
      </div>

    </form>

  </div>
</div>


@endsection
