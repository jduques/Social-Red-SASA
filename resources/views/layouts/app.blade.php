<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Social Red SASA</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-5.5.0-web/css/all.min.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-4.5.0/css/bootstrap.min.css') }}">    
    <link rel="stylesheet" href="{{ asset('plugins/datatables-1.10.21/css/dataTables.bootstrap4.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/sasa.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-dark bg-warning shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-home fa-2x text-light"></i>
                    {{ __('Social Red SASA') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-dark">
            @yield('content')
            @yield('footer')
        </main>
    </div>

    <script type="text/javascript" src="{{ asset('plugins/bootstrap-4.5.0/js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-4.5.0/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-4.5.0/js/bootstrap.min.js')  }}"></script>    
    <script type="text/javascript" src="{{ asset('plugins/datatables-1.10.21/datatables.min.js')  }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/responsive-2.2.4/dataTables.responsive.min.js')  }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/responsive-2.2.4/responsive.bootstrap4.min.js')  }}"></script>

    @yield('js') 


</body>
</html>
