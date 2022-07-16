@extends('layouts.app')

{{-- Title --}}
@section('page_name') Homepage @endsection

{{-- Navbar --}}
@section('navbar') @endsection

{{-- Header --}}
@section('header') @endsection

@section('content')
<!-- Login page -->
<section class="login-page section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <!-- Form Container -->
                <div class="form-container">
                    <div class="row">
                        <div class="col-md-6 p-0 animate__animated animate__backInLeft">
                            <div class="card card-form">
                                <div class="card-header">
                                    <h2 class="card-title text-center mb-0">{{ __('Login Please') }}</h2>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- email -->
                                        <div class="input-group mb-4">
                                            <!-- Icon -->
                                            <span class="input-group-text" id="email">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            <!-- Input -->
                                            <input id="email" type="email" class="form-control
                                                @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="input-group mb-4">
                                            <!-- Icon -->
                                            <span class="input-group-text" id="password">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            <!-- Input -->
                                            <input id="password" type="password" class="form-control
                                                @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group text-center mb-0">
                                            <button type="submit" class="btn login-btn">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 animate__animated animate__backInRight">
                            <!-- Card Info -->
                            <div class="card card-info">
                                <div class="card-body">
                                    <h1 class="animate__animated animate__bounce animate__delay-2s">Welcome!</h1>
                                    <p class="m-0">Enter Your details and start journey with us.</p>
                                </div>
                            </div>
                            <!-- ./card-info -->
                        </div>
                    </div>
                </div>
                <!-- ./form-container -->


            </div>
        </div>
    </div>
</section>
<!-- ./login-page -->
@endsection
