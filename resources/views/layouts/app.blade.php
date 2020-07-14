<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Assignment App') }}
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
                            <li class="{{ Request::is('/') ? 'active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('first-assignment') }}"><i class="fa fa-edit"></i><span>Assignment 1</span></a>
                            </li>
                            <li class="{{ Request::is('assignment2') ? 'active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('second-assignment') }}"><i class="fa fa-edit"></i><span>Assignment 2</span></a>
                            </li>
                            <li class="{{ Request::is('assignment3') ? 'active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('third-assignment') }}"><i class="fa fa-edit"></i><span>Assignment 3</span></a>
                            </li>
                            <li class="{{ Request::is('assignment4*') ? 'active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('assignment4.index') }}"><i class="fa fa-edit"></i><span>Assignment 4</span></a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/moment.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}" defer></script>
    <script src="{{ asset('js/assignment.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
