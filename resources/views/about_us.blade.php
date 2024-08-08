@extends('layouts.app')

@section('content')
<style>
    body {
        background: #15202B;
        color: white;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        width: 100%;
        height: auto !important;
    }
    .about-us-top {
        margin-top: 80px;
    }
    .about-us-text {
        font-size: 1.25rem; /* Adjust the font size as needed */
    }

    .about-us-text-second {
        font-size: 1rem; /* Adjust the font size as needed */
    }

    .footer-section {
        display: flex;
        flex-wrap: wrap;
    }
    .footer-column {
        flex: 1;
        margin-right: 20px;
    }
    .btn-custom-success{
        background-color: rgb(13, 167, 13);
    }
    .text-custom-success{
        color: rgb(13, 167, 13);
    }
    .icon-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        color: #15202B;
        margin-right: 10px; 
    }
    .custom-icon-color{
        background-color: #435464;
    }
</style>

<div class="container about-us-top">
    <div class="row">
        <div class="col-md-8 mb-4 about-us-text">
            <h5 class="text-custom-success about-us-text">Find What You Need, When You Need It</h5>
            <ul class="list-unstyled">
                <li class="mb-2">Effortless Searching: Effortlessly search for anything related to your business needs. Whether you're seeking specific materials, tools, or services, BIZNEST puts the best options at your fingertips.</li>
                <li>Develop Your Business: Go beyond basic listings. BIZNEST helps you discover resources to propel your business forward. Find the right partners, equipment, and expert advice to nurture your venture from concept to success.</li>
            </ul>
        </div>
        <div class="col-md-4 mb-4">
            <div class="mb-4">
                <h5 class="text-custom-success about-us-text">Subscribe to our newsletter</h5>
                <p>Funding freemium long tail hypotheses first mover advantage assets ownership</p>
                <button class="btn btn-custom-success">Subscribe</button>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="d-flex">
            <!-- Icons -->
            <div class="icon-circle custom-icon-color">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="icon-circle custom-icon-color">
                <i class="fa-solid fa-calendar-days"></i>
            </div>
            <div class="icon-circle custom-icon-color">
                <i class="fa-solid fa-comments"></i>
            </div>
            <div class="icon-circle custom-icon-color">
                <i class="fa-solid fa-shield"></i>
            </div>
            <div class="icon-circle custom-icon-color">
                <i class="fa-solid fa-clock"></i>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="BizNest Logo" class="img-fluid mb-2">
            <p class="about-us-text-second">Local Business Directory</p>
            <p>BIZNEST is your partner in building a successful and sustainable business.</p>
            <p>Email: <a href="mailto:biznest@mail.com" class="text-custom-success">biznest@mail.com</a></p>
            <p>Phone: +12 3456 7890</p>
        </div>
        <div class="col-md-9 mb-4">
            <div class="row footer-section">
                <div class="col-md-3 footer-column">
                    <h5 class="text-custom-success about-us-text">Services</h5>
                    <ul class="list-unstyled about-us-text">
                        <li class="text-light">Web Hosting</li>
                        <li class="text-light">Domains</li>
                        <li class="text-light">Premium Hosting</li>
                        <li class="text-light">Private Server</li>
                        <li class="text-light">E-mail Hosting</li>
                    </ul>
                </div>
                <div class="col-md-3 footer-column">
                    <h5 class="text-custom-success about-us-text">Support</h5>
                    <ul class="list-unstyled about-us-text">
                        <li class="text-light">Pricing Plan</li>
                        <li class="text-light">Documentation</li>
                        <li class="text-light">Guide</li>
                        <li class="text-light">Tutorial</li>
                    </ul>
                </div>
                <div class="col-md-3 footer-column">
                    <h5 class="text-custom-success about-us-text">Company</h5>
                    <ul class="list-unstyled about-us-text">
                        <li class="text-light">About</li>
                        <li class="text-light">Blog</li>
                        <li class="text-light">Join Us</li>
                        <li class="text-light">Press</li>
                        <li class="text-light">Partners</li>
                    </ul>
                </div>
                <div class="col-md-3 footer-column">
                    <h5 class="text-custom-success about-us-text">Legal</h5>
                    <ul class="list-unstyled about-us-text">
                        <li class="text-light">Claim</li>
                        <li class="text-light">Privacy</li>
                        <li class="text-light">Terms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
