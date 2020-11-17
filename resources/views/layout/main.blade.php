<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Hireo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="/"><h1 style="padding-top: 25px;">TEST</h1></a>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">
                            <li><a href="/" class="current">Home</a></li>

                            <li><a href="/product">All Products</a></li>

                            <li><a href="/product/create">Create Products</a></li>

                            <li><a href="/product/show">Delete Products</a></li>

                            <li><a href="/category">All Categories</a></li>

                            <li><a href="/category/create">Create Categories</a></li>

                            <li><a href="/category/show">Delete / Update Categories</a></li>


                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class="right-side">

                    <!--  User Notifications -->
                    <div class="header-widget hide-on-mobile">

                        <!-- Notifications -->
                        <div class="header-notifications">
                            @guest
                                <ul class="navbar-nav ml-auto" style="list-style: none">
                                    <li class="nav-item">
                                        <a class="alink" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="alink" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                </ul>
                            @endif
                            @else
                                <div class="" style="margin-top: 35%;">
                                    <h3><a href="/home" style="color:#000;">{{ Auth::user()->name }}</a></h3>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
                    <!--  User Notifications / End -->


                    <!-- Mobile Navigation Button -->
                    <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

            </div>
                <!-- Right Side Content / End -->
        </div>
        <!-- Header / End -->
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

@yield('content')

<!-- Footer
    ================================================== -->
    <div id="footer">

        <!-- Footer Top Section -->
        <div class="footer-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <!-- Footer Rows Container -->
                        <div class="footer-rows-container">

                            <!-- Left Side -->
                            <div class="footer-rows-left">
                                <div class="footer-row">
                                    <div class="footer-row-inner footer-logo">
                                        Test
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side -->
                            <div class="footer-rows-right">

                                <!-- Social Icons -->
                                <div class="footer-row">
                                    <div class="footer-row-inner">
                                        <ul class="footer-social-links">
                                            <li>
                                                <a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <!-- Language Switcher -->
                                <div class="footer-row">
                                    <div class="footer-row-inner">
                                        <select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
                                            <option selected>English</option>
                                            <option>Français</option>
                                            <option>Español</option>
                                            <option>Deutsch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Footer Rows Container / End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top Section / End -->

        <!-- Footer Middle Section -->
        <div class="footer-middle-section">
            <div class="container">
                <div class="row">

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>For Candidates</h3>
                            <ul>
                                <li><a href="#"><span>Browse Jobs</span></a></li>
                                <li><a href="#"><span>Add Resume</span></a></li>
                                <li><a href="#"><span>Job Alerts</span></a></li>
                                <li><a href="#"><span>My Bookmarks</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>For Employers</h3>
                            <ul>
                                <li><a href="#"><span>Browse Candidates</span></a></li>
                                <li><a href="#"><span>Post a Job</span></a></li>
                                <li><a href="#"><span>Post a Task</span></a></li>
                                <li><a href="#"><span>Plans & Pricing</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>Helpful Links</h3>
                            <ul>
                                <li><a href="#"><span>Contact</span></a></li>
                                <li><a href="#"><span>Privacy Policy</span></a></li>
                                <li><a href="#"><span>Terms of Use</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>Account</h3>
                            <ul>
                                <li><a href="#"><span>Log In</span></a></li>
                                <li><a href="#"><span>My Account</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
                        <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                        <form action="#" method="get" class="newsletter">
                            <input type="text" name="fname" placeholder="Enter your email address">
                            <button type="submit"><i class="icon-feather-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Middle Section / End -->

        <!-- Footer Copyrights -->
        <div class="footer-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        © 2019 <strong>Test</strong>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyrights / End -->

    </div>
    <!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
<script src="{{ asset('js/jquery-migrate-3.1.0.min.js') }}" defer></script>
<script src="{{ asset('js/mmenu.min.js') }}" defer></script>
<script src="{{ asset('js/tippy.all.min.js') }}" defer></script>
<script src="{{ asset('js/simplebar.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-slider.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}" defer></script>
<script src="{{ asset('js/snackbar.js') }}" defer></script>
<script src="{{ asset('js/clipboard.min.js') }}" defer></script>
<script src="{{ asset('js/counterup.min.js') }}" defer></script>
<script src="{{ asset('js/magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('js/slick.min.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>
<script src="{{ asset('js/snackbar-user-status.js') }}" defer></script>
<script src="{{ asset('js/google-autocomplete.js') }}" defer></script>







</body>
</html>
