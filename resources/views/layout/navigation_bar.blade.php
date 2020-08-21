
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
                            <a href="#about" class="nav-link js-scroll-trigger right-side_navlinks">{{ __('About Tuon') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="nav-link js-scroll-trigger right-side_navlinks">{{ __('To Do List') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link js-scroll-trigger right-side_navlinks" data-toggle="modal" data-target="#modalLoginForm">{{ __('Login') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>