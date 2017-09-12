<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" /> -->
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <!-- <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- Theme style -->
        <!-- <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('css/sidebar.css') }}"  rel="stylesheet" type="text/css" ></script> -->
        <link rel="stylesheet" type="text/css" href="/public/css/sidemenu.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style>
<div class="wrap">



        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        <img src="https://docs.eg-on.com/fileadmin/templates/page.de/img/addon-logo-80.png" width="32px" height="32px">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                      @if(!Session::has('userType'))
                                      <a href="{{ route('user.logout') }}">
                                                   {{ csrf_field() }}
                                          User Logout
                                      </a>
                                      <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form> -->
                                      @endif

                                        @if(Session::has('userType') AND (Session::get('userType') == 'Admin'))
                                        <a href="{{ route('admin.logout')}}">
                                                     {{ csrf_field() }}
                                            Logout Admin
                                        </a>
                                        @endif
                                          <!-- //This is to prevent the default action ==> onclick="event.preventDefault; document.getElementById('logout-form').submit();"
                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> -->
                                        @if(Session::has('userType') AND (Session::get('userType') == 'SuperAdmin'))
                                        <a href="{{ route('superadmin.logout') }}">
                                                     {{ csrf_field() }}
                                            Logout Super Admin

                                        </a>
                                        <!-- <form id="logout-form" action="{{ route('superadmin.logout') }}" method="GET" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> -->
                                        @endif

                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if(Session::has('userType'))
<div class="alert alert-danger">
  {{ Session::get('userType')}}
</div>

@endif

<aside id="side-menu" class="aside" role="navigation">
<ul class="nav nav-list accordion">
  <li class="nav-header">
    <div class="link"><i class="fa fa-lg fa-globe"></i>Portal<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Administration</a></li>
    </ul>
  </li>

  <li class="nav-header">
    <div class="link"><i class="fa fa-lg fa-users"></i>Users<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Users</a></li>
      <li><a href="#">New User</a></li>
    </ul>
  </li>

  <li class="nav-header">
    <div class="link"><i class="fa fa-cloud"></i>Sites<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Search Sites</a></li>
      <li><a href="#">New Site</a></li>
      <li><a href="#">Jobs</a></li>
    </ul>
  </li>

   <li class="nav-header">
    <div class="link"><i class="fa fa-lg fa-map-marker"></i>Zones<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Search Zones</a></li>
      <li><a href="#">New Zone</a></li>
    </ul>
  </li>

  <li class="nav-header">
    <div class="link"><i class="fa fa-lg fa-file-image-o"></i>Reports<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Entries</a></li>
      <li><a href="#">Redirects</a></li>
      <li><a href="#">Pingbacks</a></li>
      <li><a href="#">Tags</a></li>
    </ul>
  </li>

</ul>
</aside>

<!--Body content-->
<div class="content">
<div class="top-bar">
<a href="#menu" class="side-menu-link burger">
<span class='burger_inside' id='bgrOne'></span>
<span class='burger_inside' id='bgrTwo'></span>
<span class='burger_inside' id='bgrThree'></span>
</a>
</div>
<section class="content-inner">
<h2>Sample</h2>
<h3>A responsive Top and Side Menu, resize your browser to find out</h3>
</section>
</div>

</div>
    </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
    <script src="/public/js/sidemenu.js" type="text/javascript"></script>

</body>
</html>
