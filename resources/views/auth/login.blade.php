@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('template/dist/landing_page/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('template/dist/landing_page/css//templatemo-breezed.css') }}">

    <link rel="stylesheet" href="{{ asset('template/dist/landing_page/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('template/dist/landing_page/css/lightbox.css') }}">
<style>
    body {
        background-image: url("{{ asset('template/dist/img/background.jpg') }}");
        background-size: cover;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 10px;   /* Height of the footer  */
        background: transparent;
    }
</style>


<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
    <div class="item">
            <div class="img-fill">
            <img src="{{ asset('template/dist/landing_page//images/background.jpg') }}" alt="">
                <div class="text-content">
                  <h2>Welcome To Ernaldi Bahar Archives Management System</h2>
                  <br><br>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->

                                    <!-- <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> -->
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
