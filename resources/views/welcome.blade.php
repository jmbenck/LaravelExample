<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IFPR - Frameworks</title>

  <!-- Favicon -->
  <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="{{URL::asset('css/style-home.css')}}" rel="stylesheet" type="text/css" />

  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{URL::asset('js/ajax.js')}}"></script>
</head>
<body>
  <div class="flex-center position-ref full-height" id="fundo">
    @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ url('/login') }}">Login</a>
      <a href="{{ url('/register') }}">Register</a>
      @endif
    </div>
    @endif
    <div class="content">
      <div class="title m-b-md">
        Trabalho Frameworks<br>(Laravel)
      </div>

      <h4 style="color: white;">
        AUTOR: JOAO MARCOS CORREA BENCK
        <h4>
          <div class="links">
            <a href="http://127.0.0.1:8000/product">
              <i class="fa"> ENTRAR</i>
            </a>
          </a>
        </div>
      </div>
    </div>
  </body>
  </html>
