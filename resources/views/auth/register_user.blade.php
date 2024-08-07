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
        height: auto !important;
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

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        color: white !important;
        background-color: #015701;


    }
    .btn-login:hover{

        color: rgb(255, 255, 255) !important;
        background-color:rgb(0, 0, 0) ;
    }

    .btn-google, .btn-facebook, .btn-github {
        color: white !important;
        background-color: rgb(0, 0, 0);
        display: inline-block;
        width: auto;
        padding: 0.5rem 1rem;
        margin-right: 0.5rem;
    }

    .card {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        height: auto !important;
    }

    .card-title {
        color: green;
    }

    .form-check-label {
        color: white;
    }
    .text-green {
        color: rgb(13, 167, 13);
    }
    .custom-form-input {
        width: 100%; /* Adjust the width as needed */
        margin: 0 auto;
         /* Center the form inputs horizontally */
    }
    .custom-button-container{
        margin-top:40px;
    }

    .btn-link{
        color:white;
    }

    .btn-link:hover{
        color:white;
    }

    @media (max-width: 576px) {
        .custom-form-input {
            width: 100% !important;
            margin-left: 0%;
            margin-right: 20px;

        }
        .btn-login {
            width: 100% !important;
        }
    }

</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        // Redirect to employee registration page when "Signup as an employee" button is clicked
        $("#emp-signup-shift-btn").click(function() {
            window.location.href = "{{ route('register_employee') }}";
        });
    });
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-4 p-sm-5">
                    <div class="background-image-container">
                        <img src="/images/logo.png" alt="Logo Image">
                    </div>
                    <div class="text-center mb-4 text-white font-size-lg">
                        Local Business Directory
                    </div>

                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg" id="signup-user-text" ">{{ __('Signup as a User') }}</h5>

                    <form method="POST" action="{{ route('register') }}" class="mb-4" id="user-registration-form">
                        @csrf
                        <div class="row">
                            <!-- Left column -->
                            <div class="col-md-6 col-sm-12">
                                <!-- Existing form fields -->
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
                            </div>

                            <!-- Right column -->
                            <div class="col-md-6 col-sm-12">
                                <!-- Additional fields -->
                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="address" type="text" class="form-control" name="address" placeholder="Address" required>
                                    <label for="address">Address</label>
                                </div>

                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="nearest_city" type="text" class="form-control" name="nearest_city" placeholder="Nearest City" required>
                                    <label for="nearest_city">Nearest City</label>
                                </div>

                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="mobile_number" type="text" class="form-control" name="mobile_number" placeholder="Mobile Number" required>
                                    <label for="mobile_number">Mobile Number</label>
                                </div>

                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="id_number" type="text" class="form-control" name="id_number" placeholder="ID Number" required>
                                    <label for="id_number">ID Number</label>
                                </div>
                                <!-- More additional fields -->
                            </div>
                        </div>

                        <!-- Link for signing in, HR, and social media buttons -->

                        <div class="container">
                            <div class="d-grid gap-2 custom-form-input text-center">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 col-sm-12 mb-2 mb-md-0">
                                        <button class="btn btn-lg btn-login fw-bold text-uppercase rounded-pill w-100" type="submit">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <button class="btn btn-lg btn-login fw-bold text-uppercase rounded-pill w-100" type="button" id="emp-signup-shift-btn">
                                            {{ __('Signup as an Employee') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <hr class="my-4">
                        <a class="d-block text-center btn-link mt-2 small" href="{{ route('login') }}">{{ __('Have an account? Sign In') }}</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
