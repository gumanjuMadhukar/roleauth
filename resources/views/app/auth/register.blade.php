@extends('app.layout')
@section('content')
<div class="app app-signup p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <form action="{{route('auth-register-save')}}" method="post">
                    <div class="app-auth-body mx-auto">
                        <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
                        <h2 class="auth-heading text-center mb-4">Sign Up</h2>

                        <div class="auth-form-container text-start mx-auto">
                            <form class="auth-form auth-signup-form">
                                @csrf
                                <div class="email mb-3">
                                    <label class="sr-only" for="email">Your Name</label>
                                    <input id="name" name="name" type="text" class="form-control name" placeholder="Full name" required="required">
                                </div>
                                <div class="email mb-3">
                                    <label class="sr-only" for="email">Your Email</label>
                                    <input id="email" name="email" type="email" class="form-control email" placeholder="Email" required="required">
                                </div>
                                <div class="phone mb-3">
                                    <label class="sr-only" for="phone">Your Phone</label>
                                    <input id="phone" name="phone" type="phone" class="form-control phone" placeholder="Phone" required="required">
                                </div>
                                <div class="password mb-3">
                                    <label class="sr-only" for="password">Password</label>
                                    <input id="password" name="password" type="password" class="form-control password" placeholder="Create a password" required="required">
                                </div>
                                <div class="extra mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                        <label class="form-check-label" for="RememberPassword">
                                            I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
                                        </label>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                                </div>
                            </form>

                            <div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="{{route('auth-login')}}">Log in</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    <div class="overlay-content p-3 p-lg-4 rounded">
                        <h5 class="mb-3 overlay-title">Explore </h5>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
@endsection
@section('footer-scripts')
@endsection