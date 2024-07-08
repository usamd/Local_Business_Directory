@extends('layouts.guestapp')

@section('content')
<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(135deg, #15202B 40%, #09a509 100%);
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        width: 100%;
        height: 100%;
    }


    .background-image-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 200px; /* Adjust the height as needed */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .background-image-container img {
        max-width: 80%; /* Adjust the size of the image */
        max-height: 80%; /* Adjust the size of the image */
        object-fit: contain; /* Ensure the image fits within its container */
    }

    .text-white {
        color: white;
    }

    .font-size-lg {
        font-size: 1.25rem; /* Adjust the font size as needed */
    }

    .fs-lg {
        font-size: 2.50rem; /* Adjust the font size as needed */
    }

    .card-img-left {
        width: 45%; /* Maintain the width of the div */
        /* Link to your background image using the property below! */
        background: scroll center url('/images/logo.png');
        background-size: contain; /* Make the background image fit within the container without being cropped */
        background-repeat: no-repeat; /* Prevent the background image from repeating */
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        color: white !important;
        background-color: #015701;
    }
    .btn-login:hover {
        background-color: #15202B;
        color: white !important;
    }

    .btn-google, .btn-facebook, .btn-github {
        color: white !important;
        background-color: rgb(0, 0, 0);
        display: inline-block;
        width: auto;
        padding: 0.5rem 1rem;
        margin-right: 0.5rem;
    }
    .btn-link{
        color:white;
    }
    .btn-link:hover{
        color:white;
    }

    .card {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .card-title {
        color: rgb(241, 241, 241);
    }
    .text-green {
        color: rgb(255, 255, 255);
    }
    .custom-form-input {
        width: 60%; /* Adjust the width as needed */
        margin: 0 auto; /* Center the form inputs horizontally */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-4 p-sm-5">
                    <div class="background-image-container">
                        <!-- Place your image inside this div -->
                        <img src="/images/logo.png" alt="Logo Image">
                    </div>
                    <div class="text-center mb-4 text-white font-size-lg">
                        Local Business Directory
                    </div>
                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg">{{ __('Sign In') }}</h5>
                    <form method="POST" action="{{ route('login') }}" class="mb-4">
                        @csrf

                        <div class="form-floating mb-3 custom-form-input">
                            <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email" autofocus>
                            <label for="email" class="form-label form-label-sm custom-form-label">{{ __('Email Address') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 custom-form-input">
                            <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            <label for="password" class="form-label form-label-sm custom-form-label">{{ __('Password') }}</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid mb-3 custom-form-input">
                            <button type="submit" class="btn btn-lg btn-login fw-bold text-uppercase rounded-pill">
                                {{ __('Sign In') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link d-block text-center mt-2 small" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <hr class="my-4">

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-lg btn-google btn-login fw-bold rounded-circle" type="button">
                                <i class="fab fa-google"></i>
                            </button>
                            <button class="btn btn-lg btn-facebook btn-login fw-bold rounded-circle" type="button">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button class="btn btn-lg btn-github btn-login fw-bold rounded-circle" type="button">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                        <a class="btn btn-link d-block text-center mt-2 small" href="{{ route('register') }}">{{ __('Do not have an account yet? Register for free') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
