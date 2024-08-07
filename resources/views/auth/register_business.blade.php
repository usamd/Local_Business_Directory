@extends('layouts.guestapp')

@section('content')
<style>
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
            margin: 10px !important;
        }
        .btn-login {
            width: 100% !important;
        }
    }


</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show user registration form and hide employee registration form initially


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
            window.location.href = "{{ route('register') }}";
        });


    });
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">

                <div class="card-body p-4 p-sm-5">
                    <div class="background-image-container">
                        <img src="/images/logo1.png" alt="Logo Image">
                    </div>
                    <div class="text-center mb-4 text-white font-size-lg">
                        Local Business Directory
                    </div>

                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg" id="signup-business-text">{{ __('Details of the Business') }}</h5>
                    <h5 class="card-title text-center text-green mb-4 fw-light fs-lg" id="signup-business-owner-text" style="display: none;">{{ __('Details of the Owner') }}</h5>


                        <form method="POST" action="{{ route('register.business') }}" class="mb-4" id="employee-registration-form">
                            @csrf

                            <!-- Part 1: Business Information -->
                            <div id="form-part-1">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_name" type="text" class="form-control" name="business_name" placeholder="Business Name" required>
                                            <label for="business_name">Business Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_email" type="email" class="form-control  @error('email') is-invalid @enderror" name="business_email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email">
                                            <label for="email">{{ __('Email Address') }}</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_address" type="text" class="form-control " name="business_address" placeholder="Business Address" required>
                                            <label for="business_address">Business Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="business_phone" type="text" class="form-control " name="phone" placeholder="Phone No" required>
                                            <label for="phone">Phone No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="district" type="text" class="form-control " name="district" placeholder="District" required>
                                            <label for="district">District</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="postal" type="text" class="form-control " name="postal" placeholder="Postal" required>
                                            <label for="postal">Postal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="category" type="text" class="form-control " name="category" placeholder="Category" required>
                                            <label for="category">Category</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="province" type="text" class="form-control " name="province" placeholder="Province" required>
                                            <label for="province">Province</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="d-grid gap-2 custom-form-input text-center">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 mb-2 mb-md-0">
                                                <button class="btn btn-lg  btn-login fw-bold text-uppercase rounded-pill" type="button" id="first-back-button"style="width: 400px; margin: 0 auto;">
                                                    Back
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <button class="btn btn-lg  btn-login fw-bold text-uppercase rounded-pill" type="button" id="next-button"style="width: 400px; margin: 0 auto;">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Part 2: Personal Information -->
                            <div id="form-part-2" style="display: none;">
                                <div class="row">
                                    <!-- First column spanning full width -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="owner_name" type="text" class="form-control  @error('name') is-invalid @enderror" name="owner_name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
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
                                            <input id="business_reg_no" type="text" class="form-control " name="business_reg_no" placeholder="Business Registration Number" required>
                                            <label for="business_reg_no">Business Registration Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="owner_email" type="email" class="form-control  @error('email') is-invalid @enderror" name="owner_email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email">
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
                                            <input id="owner_phone" type="text" class="form-control " name="owner_phone" placeholder="Mobile" required>
                                            <label for="mobile">Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="address" type="text" class="form-control " name="address" placeholder="Address" required>
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 custom-form-input">
                                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
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
                                            <input id="password-confirm" type="password" class="form-control " name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="d-grid gap-2 custom-form-input text-center">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 mb-2 mb-md-0">
                                                <button class="btn btn-lg  btn-login fw-bold text-uppercase rounded-pill" type="button" id="second-back-button" style="width: 400px;">
                                                    Back
                                                </button>

                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <button class="btn btn-lg  btn-login fw-bold text-uppercase rounded-pill" type="submit" style="width: 400px;">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <hr class="my-4">

                                <div id="footer-signup-items"style="display: none;">
                                    <a class="d-block text-center btn-link mt-2 small" href="{{ route('login') }}">{{ __('Have an account? Sign In') }}</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
