@extends('layouts.app')

@section('content')
<style>
    body {
        background: black;
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
        width: 45%;
        /* Link to your background image using in the property below! */
        background: scroll center url('/images/logo.png');
        background-size: cover;
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        color: white !important;
        background-color: green;
    }

    .btn-google, .btn-facebook, .btn-github {
        color: white !important;
        background-color: green;
        display: inline-block;
        width: auto;
        padding: 0.5rem 1rem;
        margin-right: 0.5rem;
    }

    .card-body {
        background-color:#141927;/* Slightly darker shade of black */
        /* Ensures the text is readable 131722 */
    }

    .card-title {
        color: green;
    }

    .form-check-label {
        color: white;
    }
    .text-green {
        color: green;
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
                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg">{{ __('Register') }}</h5>
                    <form method="POST" action="{{ route('register') }}"class="mb-4">
                        @csrf

                        <div class="form-floating mb-3 custom-form-input">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                            <label for="name">{{ __('Name') }}</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 custom-form-input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email">
                            <label for="email">{{ __('Email Address') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 custom-form-input">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                            <label for="password">{{ __('Password') }}</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 custom-form-input">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="d-grid mb-3 custom-form-input">
                            <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill" type="submit">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <a class="d-block text-center mt-2 small" href="{{ route('login') }}">{{ __('Have an account? Sign In') }}</a>

                        <hr class="my-4">

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-lg btn-google btn-login fw-bold" type="button">
                                <i class="fab fa-google"></i>
                            </button>
                            <button class="btn btn-lg btn-facebook btn-login fw-bold" type="button">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button class="btn btn-lg btn-github btn-login fw-bold" type="button">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
