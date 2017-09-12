<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Styles -->
  <style>
  html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }

  .content {
    text-align: center;
  }

  .title {
    font-size: 84px;
  }

  .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }

  .m-b-md {
    margin-bottom: 30px;
  }
  </style>
</head>
<body>
  <!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Egon Solution</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> -->
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a>
      <a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>Register</a>
      @endif
    </div>
    @endif
    <div class="jumbotron jumbotron-fluid">
      <div class="featurette">


        <div class="container">

          <div class="row" >
            <div class="btn-group  btn-group-justified" >
              <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-nav">
                  <a href="/home" class="btn btn-secondary btn-lg" role="button" > <img src="../images/users.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;" class="img-rounded"></a>
                  <p><strong>Users</strong></p>
                </button>
              </div>
              <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-nav">
                  <a href="/admin" class="btn btn-secondary btn-lg" role="button" > <img src="../images/user_admin.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;" class="img-rounded"></a>
                  <p><strong>Admins</strong></p>
                </button>
              </div>
              <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-nav">
                  <a href="http://localhost:8000/" class="btn btn-secondary btn-lg" role="button" > <img src="../images/super_admin_gear.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;" class="img-rounded"></a>
                  <p><strong>Super Admins</strong></p>
                </button>
              </div>

            </div>
          </div>
        </div></div></div></div>
        <!-- <div class="col-xs-6 col-md-3">
        <a href="{{ route('admin.dashboard') }}" class="thumbnail">
        <button bsStyle="primary" bsSize="large" type="submit"><img src="C:/xampp/htdocs/multi_auth/user_admin.png" alt="admin"/></button>
      </a>
      <a href="{{ route('home') }}" class="thumbnail">
      <button bsStyle="primary" bsSize="large" type="submit"><img src="C:/xampp/htdocs/multi_auth/super_admin_gear.png" alt="users"/></button>
    </a>
    <a href="#" class="thumbnail">
    <button bsStyle="primary" bsSize="large" type="submit"><img src="C:/xampp/htdocs/multi_auth/users.png" alt="super admin"/></button>
  </a>
</div>

</div> -->
<!-- <div class="col-xs-12 col-md-8">
<h1 class="display-3">
<div class="container-fluid">
<a href="/admin" class="btn btn-secondary btn-lg" role="button" > <img src="../images/user_admin.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;"></a>
</div>
<div class="container-fluid">

<a href="/home" class="btn btn-secondary btn-lg" role="button"><img src="../images/users.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;"></a>
</div>

<div class="container-fluid">

<a href="#" class="btn btn-secondary btn-lg" role="button"><img src="../images/super_admin_gear.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;"></a>
</div>
</h1>
<div class="col-xs-12 col-md-8">

<p>Administrator</p>
<p>Users</p>
<p>Super Administrator</p>

@component('components.who')
@endcomponent

</div>
</div>
-->


</body>
</html>
