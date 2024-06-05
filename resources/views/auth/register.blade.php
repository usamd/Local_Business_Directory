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

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        color: white !important;
        background-color: green;

    }
    .btn-login:hover{
        background-color:white ;
        color: green !important;
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
        width: 100%; /* Adjust the width as needed */
        margin: 0 auto;
         /* Center the form inputs horizontally */
    }
    .custom-button-container{
        margin-top:40px;
    }


</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show user registration form and hide employee registration form initially
        $("#user-registration-form").hide();
        $("#employee-registration-form").hide();

        // Switch to user registration form when "Signup as a user" button is clicked
        $("#signup-user-btn").click(function() {
            $("#user-registration-form").show();
            $("#employee-registration-form").hide();
            $("#signup-user-btn").hide();
            $("#button-container").hide();
            $("#signup-employee-btn").hide();
            $("#signup-business-text").hide();
            $("#signup-user-text").show();
            $("#login-btn").hide();
        });
         // Switch to user registration form when "Signup as an employee" button is clicked
        $("#signup-employee-btn").click(function() {
            $("#user-registration-form").hide();
            $("#employee-registration-form").show();
            $("#form-part-1").show();
            $("#form-part-2").hide();
            $("#button-container").hide();
            $("#signup-user-btn").hide();
            $("#signup-employee-btn").hide();
            $("#signup-business-text").show();
            $("#signup-user-text").hide();
            $("#login-btn").hide();
            $("#hiding-in-first-part").hide();

        });

        $("#emp-signup-shift-btn").click(function() {
            $("#user-registration-form").hide();
            $("#employee-registration-form").show();
            $("#form-part-1").show();
            $("#form-part-2").hide();
            $("#main-button-container").hide();
            $("#signup-user-btn").hide();
            $("#signup-employee-btn").hide();
            $("#signup-business-text").show();
            $("#signup-user-text").hide();
            $("#login-btn").hide();
        });

        $("#user-signup-shift-btn").click(function() {
            $("#form-part-1").hide();
            $("#form-part-2").hide();
            $("#user-registration-form").show();
            $("#employee-registration-form").hide();
            $("#main-button-container").hide();
            $("#signup-user-btn").hide();
            $("#signup-employee-btn").hide();
            $("#signup-business-text").hide();
            $("#signup-user-text").show();
            $("#login-btn").hide();
        });

        $("#next-button").click(function() {
            $("#user-registration-form").hide();
            $("#main-button-container").hide();
            $("#signup-user-btn").hide();
            $("#signup-employee-btn").hide();
            $("#signup-business-text").hide();
            $("#signup-user-text").hide();
            $("#signup-business-owner-text").show();
            $("#form-part-2").show();
            $("#form-part-1").hide();
            $("#hiding-in-first-part").show();
            $("#login-btn").hide();
            $("#footer-signup-items").show();
        });

        $("#second-back-button").click(function() {
            $("#user-registration-form").hide();
            $("#main-button-container").hide();
            $("#signup-user-btn").hide();
            $("#signup-employee-btn").hide();
            $("#signup-business-text").show();
            $("#signup-user-text").hide();
            $("#signup-business-owner-text").hide();
            $("#form-part-2").hide();
            $("#form-part-1").show();
            $("#hiding-in-first-part").hide();
            $("#login-btn").hide();
            $("#footer-signup-items").hide();
        });

        $("#first-back-button").click(function() {
            $("#user-registration-form").hide();
            $("#main-button-container").hide();
            $("#signup-user-btn").show();
            $("#signup-employee-btn").show();
            $("#signup-business-text").hide();
            $("#signup-user-text").hide();
            $("#signup-business-owner-text").hide();
            $("#form-part-2").hide();
            $("#form-part-1").hide();
            $("#hiding-in-first-part").hide();
            $("#login-btn").show();
            $("#footer-signup-items").hide();
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

                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg" id="signup-business-text" style="display:none;">{{ __('Details of the Business') }}</h5>
                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg" id="signup-user-text" style="display: none;">{{ __('Signup as a User') }}</h5>
                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg" id="signup-business-owner-text" style="display: none;">{{ __('Details of Owner') }}</h5>

                //Buttons for customizing the users who are going to register
                <div class="d-grid gap-3 mb-2 button-container text-center" id="main-button-container" style="display:none;">
                    <button id="signup-user-btn" class="btn btn-login fw-bold rounded-pill px-3" style="width: 300px; margin: 0 auto;">Signup as a user</button>
                    <button id="signup-employee-btn" class="btn btn-login fw-bold rounded-pill px-3" style="width: 300px; margin: 0 auto;">Signup as an employee</button>
                    <a href="{{ route('login') }}" id="login-btn" class="btn btn-login fw-bold rounded-pill px-3" style="width: 300px; margin: 0 auto;">Login</a>
                </div>



                //User Signup Page starts here
                <div class="container1">
                    <form method="POST" action="{{ route('register') }}" class="mb-4" id="user-registration-form" style="display: none;">
                        @csrf
                        <div class="row">
                            <!-- Left column -->
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <!-- Additional fields -->
                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="address" type="text" class="form-control form-control-lg" name="address" placeholder="Address" required>
                                    <label for="address">Address</label>
                                </div>

                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="nearest_city" type="text" class="form-control form-control-lg" name="nearest_city" placeholder="Nearest City" required>
                                    <label for="nearest_city">Nearest City</label>
                                </div>

                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="mobile_number" type="text" class="form-control form-control-lg" name="mobile_number" placeholder="Mobile Number" required>
                                    <label for="mobile_number">Mobile Number</label>
                                </div>

                                <div class="form-floating mb-3 custom-form-input">
                                    <input id="id_number" type="text" class="form-control form-control-lg" name="id_number" placeholder="ID Number" required>
                                    <label for="id_number">ID Number</label>
                                </div>
                                <!-- More additional fields -->
                            </div>
                        </div>

                        <!-- Link for signing in, HR, and social media buttons -->
                        <div class="text-center mb-3 custom-button-container">
                            <!-- Buttons -->
                            <div class="d-grid mb-3 gap-2 custom-form-input">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill" type="submit" style="width: 400px; margin: 0 auto;">
                                    {{ __('Register') }}
                                </button>
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill" type="button" id="emp-signup-shift-btn" style="width: 400px; margin: 0 auto;">
                                    {{ __('Signup as an Employee') }}
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
                        </div>
                    </form>
                </div>




                    //Employee signup form starts here
                    <div class="container2">
                        <form method="POST" action="{{ route('register') }}" class="mb-4" id="employee-registration-form" style="display: none;">
                            @csrf

                            <!-- Part 1: Business Information -->
                            <div id="form-part-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_name" type="text" class="form-control form-control-lg" name="business_name" placeholder="Business Name" required>
                                            <label for="business_name">Business Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="business_email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email">
                                            <label for="email">{{ __('Email Address') }}</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_address" type="text" class="form-control form-control-lg" name="business_address" placeholder="Business Address" required>
                                            <label for="business_address">Business Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_phone" type="text" class="form-control form-control-lg" name="phone" placeholder="Phone No" required>
                                            <label for="phone">Phone No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="district" type="text" class="form-control form-control-lg" name="district" placeholder="District" required>
                                            <label for="district">District</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="postal" type="text" class="form-control form-control-lg" name="postal" placeholder="Postal" required>
                                            <label for="postal">Postal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="category" type="text" class="form-control form-control-lg" name="category" placeholder="Category" required>
                                            <label for="category">Category</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="province" type="text" class="form-control form-control-lg" name="province" placeholder="Province" required>
                                            <label for="province">Province</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid mb-3 gap-2 custom-form-input text-center">
                                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill" type="button" id="next-button"style="width: 400px; margin: 0 auto;">
                                        Next
                                    </button>
                                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill" type="button" id="first-back-button"style="width: 400px; margin: 0 auto;">
                                        Back
                                    </button>
                                </div>
                            </div>

                            <!-- Part 2: Personal Information -->
                            <div id="form-part-2" style="display: none;">
                                <div class="row">
                                    <!-- First column spanning full width -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                                            <label for="name">{{ __('Name') }}</label>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Split the remaining fields equally into two columns -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_reg_no" type="text" class="form-control form-control-lg" name="business_reg_no" placeholder="Business Registration Number" required>
                                            <label for="business_reg_no">Business Registration Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email">
                                            <label for="email">{{ __('Email Address') }}</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="mobile" type="text" class="form-control form-control-lg" name="mobile" placeholder="Mobile" required>
                                            <label for="mobile">Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="address" type="text" class="form-control form-control-lg" name="address" placeholder="Address" required>
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                            <label for="password">{{ __('Password') }}</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid mb-3 gap-2 custom-form-input text-center">
                                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill" type="submit"style="width: 400px; margin: 0 auto;">
                                        {{ __('Register') }}
                                    </button>
                                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase rounded-pill" type="button" id="second-back-button"style="width: 400px; margin: 0 auto;">
                                        Back
                                    </button>
                                </div>
                            </div>


                                <div id="footer-signup-items"style="display: none;">
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
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
