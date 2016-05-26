<?php
// use Illuminate\Support\Facades\Auth;
?>

@if(Auth::user())
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
<link rel="stylesheet" href="{{asset('dashboard/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
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
<body id="app-layout" class="hold-transition skin-blue sidebar-mini" style="padding-right: 0px;">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>K</b>E</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Kheir</b>Equation</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                 @if(Auth::user())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">



                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                  <!-- <span><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>

                    @elseif(auth()->guard('organization')->check())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="uploads/{{auth()->guard('organization')->user()->organization_img}}" class="user-image img-responsive" alt="User Image">



                  <span class="hidden-xs">{{ auth()->guard('organization')->user()->name }}</span>
                  <!-- <span><a href="{{ url('/logout_organization') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>


                    @else

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->




                  <span class="hidden-xs">Guest</span>
                  <!-- <span><a href="#"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>
                    @endif

              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
              @if(Auth::user())
                <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
              @elseif(auth()->guard('organization')->check())
                <a href="{{ url('/logout_organization') }}"><i class="fa fa-btn fa-sign-out"></i>
                Logout</a>
                @else
                <span></span>                
                @endif
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar" style="height: 205%;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel" style="padding-bottom: 22px;">
            <div class="pull-left image">
            @if(Auth::user())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

                  <!-- <span><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>


                    @elseif(auth()->guard('organization')->check())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="uploads/{{auth()->guard('organization')->user()->organization_img}}" class="user-image img-responsive" alt="User Image">

                  <!-- <span><a href="{{ url('/logout_organization') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>


                    @else

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->

                  <!-- <span><a href="#"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>
                    @endif
              <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
            </div>
            <div class="pull-left info" style="margin-top: 11px;">
           <!--  @if(Auth::user())
              <p>Welcome &nbsp; {{ Auth::user()->first_name }}</p>
            @elseif(auth()->guard('organization')->check())
              <p>Welcome &nbsp; {{ auth()->guard('organization')->user()->name }}</p>
            @else
              <p>Welcome Guest</p>
            @endif -->
              <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Statistics</span>
                <i class="label pull-right bg-red">Premium</i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    <!-- <div class="container"> -->
        @yield('content')
    <!-- </div> -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Powered by <a href="#">iSky Development</a>/<a href="#">Bedaya</a></b> 
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">Kheir Equation</a>.</strong> All rights reserved.
      </footer>


@elseif(auth()->guard('organization')->check())
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
<link rel="stylesheet" href="{{asset('dashboard/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
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
<body id="app-layout" class="hold-transition skin-blue sidebar-mini" style="padding-right: 0px;">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>K</b>E</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Kheir</b>Equation</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                 @if(Auth::user())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">



                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                  <!-- <span><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>

                    @elseif(auth()->guard('organization')->check())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="uploads/{{auth()->guard('organization')->user()->organization_img}}" class="user-image img-responsive" alt="User Image">



                  <span class="hidden-xs">{{ auth()->guard('organization')->user()->name }}</span>
                  <!-- <span><a href="{{ url('/logout_organization') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>


                    @else

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->




                  <span class="hidden-xs">Guest</span>
                  <!-- <span><a href="#"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>
                    @endif

              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
              @if(Auth::user())
                <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
              @elseif(auth()->guard('organization')->check())
                <a href="{{ url('/logout_organization') }}"><i class="fa fa-btn fa-sign-out"></i>
                Logout</a>
                @else
                <span></span>                
                @endif
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar" style="height: 205%;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel" style="padding-bottom: 22px;">
            <div class="pull-left image">
            @if(Auth::user())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

                  <!-- <span><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>


                    @elseif(auth()->guard('organization')->check())

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <img src="uploads/{{auth()->guard('organization')->user()->organization_img}}" class="user-image img-responsive" alt="User Image">

                  <!-- <span><a href="{{ url('/logout_organization') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>


                    @else

                 <a href="#myprofileModal" data-toggle="modal" data-target="#myprofileModal" class="dropdown-toggle">
                  <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->

                  <!-- <span><a href="#"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> -->
                </a>
                    @endif
              <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
            </div>
            <div class="pull-left info" style="margin-top: 11px;">
           <!--  @if(Auth::user())
              <p>Welcome &nbsp; {{ Auth::user()->first_name }}</p>
            @elseif(auth()->guard('organization')->check())
              <p>Welcome &nbsp; {{ auth()->guard('organization')->user()->name }}</p>
            @else
              <p>Welcome Guest</p>
            @endif -->
              <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Statistics</span>
                <i class="label pull-right bg-red">Premium</i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    <!-- <div class="container"> -->
        @yield('content')
    <!-- </div> -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Powered by <a href="#">iSky Development</a>/<a href="#">Bedaya</a></b> 
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">Kheir Equation</a>.</strong> All rights reserved.
      </footer>
@else
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
    <script src="{{asset('js/application.js')}}"></script>
    @yield('scripts')
</body>
@endif

    <!-- JavaScripts -->
    <script src="{{asset('js/modernizer-2.7.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.11.3.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script   src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script src="{{asset('dashboard/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{asset('dashboard/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('dashboard/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('dashboard/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('dashboard/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('dashboard/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('dashboard/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dashboard/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
    @yield('scripts')
</body>
</html>
