@extends('layout.app', ['class' => 'background', 'id' => 'page-top'])

@section('title_page')
    {{ __('Tuon') }}
@endsection

@section('page_content')
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
                        <h2 class="section-heading text-white"><i>{{ __('"Bibigyang-tuon ng Tuon ang pag-aaral ng ating mga kabataan."') }}</i></h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4">{{ __("To address the immensely short attention span of the learners, this project aims to infer the user's focus on learning materials while allowing the user to select certain tabs and websites to keep active while blocking distracting ones.") }}</p>
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
                            <label for="username" class="col-form-label text-md-right"><i class="fas fa-key"></i> {{ __('Keycode') }}</label>
                            <input type="password" id="defaultForm-pass" class="form-control validate">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</button>
                    </div>
                </div>
            </div>
        </div>
@endsection