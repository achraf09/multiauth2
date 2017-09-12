@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading"> Users Dashboard</div>

              <div class="panel-body">

                @component('components.who')
                @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sidemenu.css">
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
                              <!-- <- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form> -> -->
                              @endif


                                <!-- <a href="{{ route('admin.logout')}}">
                                             {{ csrf_field() }}
                                    Logout Admin
                                </a> -->

                                  <!-- //This is to prevent the default action ==> onclick="event.preventDefault; document.getElementById('logout-form').submit();"
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form> -->
                                <!-- @if(Session::has('userType') AND (Session::get('userType') == 'SuperAdmin'))
                                <a href="{{ route('superadmin.logout') }}">
                                             {{ csrf_field() }}
                                    Logout Super Admin

                                </a> -->
                                <!-- <form id="logout-form" action="{{ route('superadmin.logout') }}" method="GET" style="display: none;">
                                    {{ csrf_field() }}
                                </form> -->
                                <!-- @endif -->

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
