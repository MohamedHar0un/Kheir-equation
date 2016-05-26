<?php
// use Illuminate\Support\Facades\Auth;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kheir Equation</title>

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLuoNAypRZLjMQ4VIE0Ldyp5YEvXZxMM&libraries=places" type="text/javascript"></script>

    <!-- Fonts -->
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/application.css')}}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
           // font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

    @yield('styling')
</head>
<body id="app-layout" class="index">
    <header class="jumbotron" role="banner">

      <div class="container">

        <div class="row">

          <div class="col-md-7">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.html">
                <img class="img-logo" src="images/logo.png" alt="">
              </a>
            </figure> <!-- /.text-center -->

            <!-- Title -->
            <h1>Kheir Equation</h1>

            <!-- Sub title -->
            <p>The first <strong> charity tracking application in egypt!</strong></p>

            <!-- Button -->
            <p class="btn-app-store">
              <a class="btn btn-danger btn-lg" href="#fakelinks">
                <img src="{{asset('images/btn-app-store.png')}}" alt="">
              </a>
            </p> <!-- /.btn-app-store -->
            <div class="row">
                <div class="col-md-3"><a href="{{ url('/login') }}">Login (Volunteer)</a></div>
                <div class="col-md-3"><a href="{{ url('/register') }}">Register (Volunteer)</a></div>
                <div class="col-md-3"><a href="{{ url('/login_organization') }}">Login (Organization)</a></div>
                <div class="col-md-3"><a href="{{ url('/register_organization') }}">Register (Organization)</a></div>
            </div>
          </div> <!-- /.col-md-7 -->

          <div class="col-md-5">

            <!-- Images showcase -->
            <figure>
              <img class="img-iPhone" src="images/iphone/2.png" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->
          
        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </header> <!-- /.jumbotron -->









    

    <!-- JavaScripts -->
    <script src="{{asset('js/jquery-1.11.3.js')}}"></script>
    <script src="{{asset('js/application.js')}}"></script>
    <script src="{{asset('js/modernizer-2.7.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script   src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>
