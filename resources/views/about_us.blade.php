@extends('layouts.app')

@section('content')
<style>
    body {
        background: #15202B;
        color:white;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        width: 100%;
        height: auto !important;
    }
</style>
<!-- Footer Section -->

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="text-success">Find What You Need, When You Need It</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">Effortless Searching: Effortlessly search for anything related to your business needs. Whether you're seeking specific materials, tools, or services, BIZNEST puts the best options at your fingertips.</li>
                    <li>Develop Your Business: Go beyond basic listings. BIZNEST helps you discover resources to propel your business forward. Find the right partners, equipment, and expert advice to nurture your venture from concept to success.</li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="text-success">Subscribe to our newsletter</h5>
                <p>Funding freemium long tail hypotheses first mover advantage assets ownership</p>
                <button class="btn btn-success">Subscribe</button>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <!-- Icons -->
                <span class="text-muted me-3">
                    <i class="fas fa-envelope fa-2x"></i>
                </span>
                <!-- Add more icons as needed -->
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-2 mb-4">
                <h5 class="text-light">BizNest</h5>
                <p>Local Business Directory</p>
                <p>BIZNEST is your partner in building a successful and sustainable business.</p>
                <p>Email: <a href="mailto:biznest@mail.com" class="text-success">biznest@mail.com</a></p>
                <p>Phone: +12 3456 7890</p>
            </div>
            <div class="col-md-2 mb-4">
                <h5 class="text-success">Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Web Hosting</a></li>
                    <li><a href="#" class="text-light">Domains</a></li>
                    <li><a href="#" class="text-light">Premium Hosting</a></li>
                    <li><a href="#" class="text-light">Private Server</a></li>
                    <li><a href="#" class="text-light">E-mail Hosting</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h5 class="text-success">Support</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Pricing Plan</a></li>
                    <li><a href="#" class="text-light">Documentation</a></li>
                    <li><a href="#" class="text-light">Guide</a></li>
                    <li><a href="#" class="text-light">Tutorial</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h5 class="text-success">Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">About</a></li>
                    <li><a href="#" class="text-light">Blog</a></li>
                    <li><a href="#" class="text-light">Join Us</a></li>
                    <li><a href="#" class="text-light">Press</a></li>
                    <li><a href="#" class="text-light">Partners</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h5 class="text-success">Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Claim</a></li>
                    <li><a href="#" class="text-light">Privacy</a></li>
                    <li><a href="#" class="text-light">Terms</a></li>
                </ul>
            </div>
        </div>
    </div>


@endsection
