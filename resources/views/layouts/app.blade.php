<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema permanente ADOOC</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/jquery.dataTables.min.css') }} ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <strong>PULPO</strong>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       
                        <li class="dropdown">
                             @can('opticas.index')
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recinto sanitario<span class="caret"></span></a>
                            <ul class="dropdown-menu"> 
                                 @can('opticas.index')
                                    <li>
                                        <a href="{{route('opticas.index')}}">Opticas</a>
                                    </li>
                                 @endcan()
                                  @can('regentes.index')
                                    <li>
                                        <a href="{{route('regentes.index')}}">Regentes</a>
                                 </li>
                                 @endcan()
                                  @can('propietarios.index')
                                    <li>
                                        <a href="{{route('propietarios.index')}}">Propietarios</a>
                                    </li>
                                    @endcan()
                            </ul>
                            @endcan
                        </li>
                       
                         @can('users.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                        </li>
                        @endcan
                        @can('roles.index')
                        <li class="nav-item">                            
                            <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                        </li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if(session('info'))
            <div class="container ">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">

                            {{session('info')}}
                        </div>
                            
                    </div>
                </div>
            </div>
        @endif
        @if(count($errors))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger">

                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                            
                    </div>
                </div>
            </div>
        @endif
        @yield('content')
    </div>

    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href=""> visionflexLab</a>
      </div>
      <!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
     <script src="{{ asset('js/jquery-3.3.1.js') }}" ></script>
      <script src="{{ asset('js/jquery.dataTables.min.js') }}" ></script>
       <script src="{{ asset('js/dataTables.bootstrap.min.js') }}" ></script>
        <script src="{{ asset('js/select2.min.js') }}" ></script>


    
    
    
    <script async>
      $(document).ready(function() {
          $('#opti').DataTable();
          
        } );
    </script>
    <script async>
        $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>
</body>
</html>
