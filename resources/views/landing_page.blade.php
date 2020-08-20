<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="VolTech V">
        <title>Tuon</title>
  
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

    <body id="page-top" class="background">
        {{-- Navigation Tab --}}
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">{{ __('Tuon') }}</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menuBar"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="btn btn-default btn-rounded mb-4 nav-link js-scroll-trigger">{{ __('To Do List') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="btn btn-default btn-rounded mb-4 nav-link js-scroll-trigger" data-toggle="modal" data-target="#modalLoginForm">{{ __('Login') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Tuon Logo Video --}}
        <header>
            <video autoplay="autoplay" loop muted onplaying="this.controls=false" volume="0">
                <source src="{{ asset('/assets/video/tuon.mp4') }}" type="video/mp4">
            </video>
        </header>
  
        {{-- About section --}}
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading text-white"><i>"Bibigyang-tuon ng Tuon ang pag-aaral ng ating mga kabataan."</i></h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4">To address the immensely short attention span of the learners, this project aims infer the user's focus on learning materials while allowing the user to select certain tabs and websites to keep active while blocking distracting ones.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Login Modal --}}
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">{{ __('Login') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <label for="username" class="col-form-label text-md-right"><i class="fas fa-user"></i> {{ __('Username') }}</label>
                            <input type="email" id="defaultForm-email" class="form-control validate">
                        </div>
                        <div class="md-form mb-4">
                            <label for="username" class="col-form-label text-md-right"><i class="fas fa-key"></i> {{ __('Key pass') }}</label>
                            <input type="password" id="defaultForm-pass" class="form-control validate">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</button>
                    </div>
                </div>
            </div>
        </div>
  
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
        <script src="{{ asset('/assets/js/idle_tracker.js') }}"></script>
    </body>
</html>