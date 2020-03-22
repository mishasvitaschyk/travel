@extends('admin.layouts.app_admin')
@section('nav')
<li class="nav-item active" ><a class="nav-link" href="{{ url('admin') }}">Маркери</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('admin/tour') }}">Тури</a></li>
@endsection
@section('content')
<br />
<div   class="container">
  <div class="col-sm-2">

      </div>
  <div class="jumbotron col-sm-8">
    @include('errors.errors')

    <form action = "{{route('update-marker', $marker->id)}}" enctype="multipart/form-data" method = "POST">
      {{csrf_field()}}

      <div style="position:relative;;" class="form-group">
        <label for="">Заголовок</label><br />
        <input type='text' class="form-control" size="30%" value="{{$marker->title}}" placeholder="" name='title' /><br />
        <label for="">Додаткова інформація:</label><br />
        <textarea name='content' class="form-control" rows="5" cols="80">{{$marker->content}}</textarea>
        <label for="image">Photo:</label><br />
        <input type='text' class="form-control" accept="image/*" size="30%" value="{{$marker->image}}"name='image' /><br />
        <img width="20%" src="{{asset('/storage/'. $marker->image)}}" alt="">
        <br />
        <div class="">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#maps" name="button">Вибрати координати</button>
          <div id="min"></div>
          <label for="">LatLng:</label><br />

          <input type="text" class="form-control"  size="30%" id="marker" value="{{$marker->latlng}}" name="latlng"/><br />
          <div id="maps"class="modal fade">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body">
                  <div class=""id="map">
                      <script>
                      function initMap() {

                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 7,
                            center: {lat: 50.431782, lng: 30.516382}
                          });

                          map.addListener('click', function(e) {
                            placeMarkerAndPanTo(e.latLng, map);

                          });
                        }

                        function placeMarkerAndPanTo(latLng, map) {
                          var marker = new google.maps.Marker({
                            position: latLng,
                            map: map

                          });
                          var min = latLng;

                          document.getElementById('marker').value = min;
                          map.panTo(latLng);
                       }
                      </script>

                    </div>



                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"name="button">Додати</button>
                </div>

              </div>

            </div>

          </div>
        </div>
        <input class="btn btn-primary"type = 'submit' value = "Оновити"/>
      </div>

    </form>

  </div>
</div>


@endsection
