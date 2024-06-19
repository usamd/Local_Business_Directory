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
        width: 45%; /* Maintain the width of the div */
        background: scroll center url('/images/logo.png');
        background-size: contain; /* Make the background image fit within the container without being cropped */
        background-repeat: no-repeat; /* Prevent the background image from repeating */
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
        background-color: #141927; /* Slightly darker shade of black */
    }

    .card-title {
        color: green;
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
                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg">{{ __('Reset Password') }}</h5>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-floating mb-3 custom-form-input">
                            <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email" autofocus>
                            <label for="email" class="form-label form-label-sm">{{ __('Email Address') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid mb-3 custom-form-input">
                            <button type="submit" class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div><br></br>
                        <a class="d-block text-center mt-2 small" href="{{ route('login') }}">{{ __('Back to login page') }}</a>
                        <br></br><br></br><br></br><br></br><br></br><br></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
