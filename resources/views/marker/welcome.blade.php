
@extends('layouts.app')
@section('nav')
<li class="nav-item active"><a class="nav-link"href="{{url('/')}}">Головна</a></li>
<li class="nav-item "><a class="nav-link" href="{{url('/tour')}}">Список турів</a></li>
@endsection
@section('content')
<div class="container"id="map">
    <script>
    function initMap() {
      var element =document.getElementById('map');
      var options = {
        zoom: 7,
        center: {lat: 50.431782, lng: 30.516382}
      };
      var myMap = new google.maps.Map(element,options);
     @foreach($markers as $marker)
      var marker = new google.maps.Marker({
        position: boudha,
        map: myMap
      });
      var boudha = new google.maps.LatLng{{$marker->latlng}};
      addMarker({
        coordinates: boudha,
        title:'{{$marker->title}}',
        info:'/maps/{{$marker->id}}',

      })

      function addMarker(properties){
        var marker = new google.maps.Marker({
          position:properties.coordinates,
          map:myMap,
          url: properties.info,

        });
        if(properties.info){
          var InfoWindow = new google.maps.InfoWindow({
            content:properties.info,


        });
        var InfoMarker = new google.maps.InfoWindow({
          content:properties.title,


      });
        marker.addListener('mouseover', function(){
              InfoMarker.open(myMap, marker);
          })
          marker.addListener('mouseout', function(){
                InfoMarker.close(myMap, marker);
            })

          marker.addListener('click', function(){
              window.location.href = marker.url;
          })
        }
      }
      @endforeach
      }
    </script>

  </div>


@endsection
