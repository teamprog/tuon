<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="author" content="VolTech V">

        <title>@yield('title_page')</title>
  
        {{-- Bootstrap core CSS --}}
        <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  
        {{-- Custom fonts for this template --}}
        <link href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  
        {{-- Plugin CSS --}}
        <link href="{{ asset('/assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

        {{-- Font-Awesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  
        {{-- Custom styles for this template --}}
        <link href="{{ asset('/assets/css/creative.min.css') }}" rel="stylesheet">

        {{-- Created Styles --}}
        <link href="{{ asset('/assets/css/own.css') }}" rel="stylesheet">
    </head>

    <body class="{{ $class ?? '' }}" id="{{ $id ?? '' }}">

        {{-- Include the navigation bar --}}
        @include('layout.navigation_bar')

        {{-- Include the page content --}}
        @yield('page_content')
        
        <footer class="footer text-faded text-center py-5">
            <div class="container">
                <p class="m-0 small">&copy; VolTech V <script>document.write( new Date().getFullYear() );</script></p>
            </div>
        </footer>
  
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
        <!-- Plugin JavaScript -->
        <script src="{{ asset('/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/assets/vendor/scrollreveal/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('/assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  
        <!-- Custom scripts for this template -->
        <script src="{{ asset('/assets/js/creative.min.js') }}"></script>
  
        <!-- added scripts -->
        {{-- <script src="{{ asset('/assets/js/idle_tracker.js') }}"></script> --}}
        <script src="{{ asset('/assets/js/todo_list.js') }}"></script>
    </body>
</html>