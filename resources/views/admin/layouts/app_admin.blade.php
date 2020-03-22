<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style media="screen">
    body{
      font-family: 'Roboto', sans-serif;
    }

  #map{
    display: block;
    width:100%;
    height:400px;
  }
    .icon-info{

      border-radius: 10px;
      background-color: #f2f2f3;
      padding: 15px;
      display: block;
      float: left;
      width: 25%;
      height: 50%;
      display: block;


    }

      .marcer-form{
        display:block;
        width:40%;
        height:50;
      }
      .share{
        margin-right: 20px;
        float: right;
        font-size: 25px;
      color: #317AAF;
      }
      .stylelike{
        margin-right: 20px;
        margin-left: 20px;
        text-align: center;
        font-size: 25px;
        color: red;
        margin-bottom: 20px;
        color: #317AAF;
      }
      .styledislike{
        margin-right: 20px;
        margin-left: 20px;
        text-align: center;
        font-size: 25px;
        color: red;
        margin-bottom: 20px;
        color: #317AAF;
      }
      .assessment{
        margin-left: 5px;
        font-size: 20px;
        color: #FCCB37;
      }
      .registration{
        display: block;
        float: right;
      }
      .log-in{
        margin-right: 4px;
      }
      .tur{
        position: relative;

        display: block;

      }
      .tur-menu{
        display: absolute;
        width: 25%;
        height: 100%;
        float: left;
        margin: 10px;

        text-align: center;
        padding-bottom: 20px;
      }

      .title{

        font-family: 'Open Sans', sans-serif;
      }



    </style>


</head>
<body>
    <div id="app">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container container-fluid">

         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
             <a style="text-decoration: none;
             font-size: 26px;
             color:#5CA72A;"class="title navbar-brand " href="{{ url('/') }}">Guide Travel</a>
           </div>


           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
               @yield('nav')


             </ul>
             <div class="registration">
               <ul class="nav navbar-nav">

                 <ul class="nav navbar-nav">
                     <!-- Authentication Links -->
                     @guest
                         <li class="">
                             <a class="nav-link" href="{{ route('login') }}"><i class="log-in glyphicon glyphicon-user"></i>{{ __('Увійти') }}</a>
                         </li>
                         @if (Route::has('register'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}"><i class="log-in glyphicon glyphicon-pencil"></i>{{ __('Реєстрація') }}</a>
                             </li>
                         @endif
                     @else
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <i class="log-in glyphicon glyphicon-user"></i>{{ Auth::user()->name }} <span class="caret"></span>
                             </a>

                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Вийти') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                             </div>
                         </li>
                     @endguest
                 </ul>


               </ul>
             </div>

         </div>

        </div>
      </nav>


    </div>
    <main >
        @yield('content')

    </main>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDosArem9LCbSAZjvx0Vb9EICbnPg-rmxg&callback=initMap"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
