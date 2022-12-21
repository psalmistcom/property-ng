<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="{{ asset('#')}}" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{asset ('css/plugin.css')}} " rel="stylesheet" />
    <!-- style CSS -->
    <link href="{{asset ('css/style.css')}} " rel="stylesheet" />
    <!-- Document Title -->
    <title>@yield('title') :: Property NG</title>
</head>

<body>
    <!--Preloader starts-->
    <div class="preloader js-preloader">
        <img src="images/preloader.gif" alt="...">
    </div>
    <!--Preloader ends-->
    <!--Page Wrapper starts-->
    <div class="page-wrapper">
        <!--header starts-->
        <header class="header transparent scroll-hide">
            <!--Main Menu starts-->
            <div class="site-navbar-wrap v1">
                <div class="container">
                    <div class="site-navbar">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-6 col-9 order-2 order-xl-1 order-lg-1 order-md-1">
                                <a class="navbar-brand" href="{{route('home') }}"><img src="{{ asset('images/logo-white.png') }}" alt="logo" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-6 col-md-1 col-3  order-3 order-xl-2 order-lg-2 order-md-3 pl-xs-0">
                                <nav class="site-navigation text-right">
                                    <div class="container">
                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                            <li class="">
                                                <a class="@yield('home')" href="{{route('home') }}">Home</a>                                                
                                            </li>
                                            <li class="">
                                                <a class="@yield('short_let') " href="{{route('short_let') }}">Short Let</a>                                                
                                            </li>
                                            <li class="">
                                                <a class="@yield('for_sale')" href="{{route('for_sale') }}">For Sale</a>                                                
                                            </li>
                                            <li class="">
                                                <a class="@yield('for_rent')" href="{{route('for_rent') }}">For Rent</a>                                                
                                            </li>
                                            <li class="">
                                                <a class="@yield('for_lease')" href="{{route('for_lease') }}">For Lease</a>                                                
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </nav>
                                <div class="d-lg-none sm-right">
                                    <a href="#" class="mobile-bar js-menu-toggle">
                                        <span class="lnr lnr-menu"></span>
                                    </a>
                                </div>
                                <!--mobile-menu starts -->
                                <div class="site-mobile-menu">
                                    <div class="site-mobile-menu-header">
                                        <div class="site-mobile-menu-close  js-menu-toggle">
                                            <span class="lnr lnr-cross"></span> </div>
                                    </div>
                                    <div class="site-mobile-menu-body"></div>
                                </div>
                                <!--mobile-menu ends-->
                            </div>
                            <div class="col-lg-4 col-md-5 col-12 order-1 order-xl-3 order-lg-3 order-md-2 text-right pr-xs-0">
                                <div class="menu-btn">
                                    <ul class="user-btn v2">
                                        <li><a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                            <span>3</span>
                                        </li>
                                        <li><a href="#"><i class="lnr lnr-heart"></i></a>
                                            <span>0</span>
                                        </li>
                                        <li><a href="#" data-toggle="modal" data-target="#user-login-popup"><i class="lnr lnr-user"></i></a>
                                        </li>
                                    </ul>
                                    <div class="add-list float-right ml-3">
                                        <a class="btn v6" href="add-listing.html"><i class="lnr lnr-home"></i>Add Listing </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Main Menu ends-->
        </header>
        <!--Header ends-->
        <!--Hero section starts-->
        @yield('content')
        <!--Blog section ends-->
        <!-- Scroll to top starts-->
        <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
        <!-- Scroll to top ends-->
    </div>
    <!--Page Wrapper ends-->
    <!--Footer Starts-->
    <div class="footer-wrapper v2">
        <div class="footer-top-area">
            <div class="container">
                <div class="row nav-folderized">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-logo">
                            <a href="index.html"> <img src="images/logo-white.png" alt="logo"></a>
                            <div class="company-desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio excepturi nam totam sequi, ipsam consequatur repudiandae libero illum.
                                </p>
                                <ul class="list footer-list mt-20">
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fa fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">13th North Ave, Florida, USA</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text"><a href="#">info@sarchholm.com</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="text">+44 078 767 595</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 text-center sm-left">
                        <div class="footer-content nav">
                            <h2 class="title">Popular Searches</h2>
                            <ul class="list res-list">
                                <li><a class="link-hov style2" href="#">Property for Rent</a></li>
                                <li><a class="link-hov style2" href="#">Property for Sale</a></li>
                                <li><a class="link-hov style2" href="#">Condominium for Sale</a></li>
                                <li><a class="link-hov style2" href="#">Resale Properties</a></li>
                                <li><a class="link-hov style2" href="#">Recent Properties</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 text-center sm-left">
                        <div class="footer-content nav">
                            <h2 class="title">Quick Links</h2>
                            <ul class="list res-list">
                                <li><a class="link-hov style2" href="about.html">About us</a></li>
                                <li><a class="link-hov style2" href="contact.html">Contact us</a></li>
                                <li><a class="link-hov style2" href="faq.html">Privacy Policy</a></li>
                                <li><a class="link-hov style2" href="faq.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="footer-content">
                            <h4 class="title">Subscribe</h4>
                            <div class="value-input-wrap newsletter">
                                <form action="#">
                                    <input type="text" placeholder="Your mail address ..">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                            <div class="footer-social-wrap">
                                <p>Follow us on </p>
                                <ul class="social-buttons style2">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 offset-md-2">
                        <p>
                            ©SarchHolm 2019. All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer ends-->
    <!--login Modal starts-->
    <div class="modal fade" id="user-login-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="lnr lnr-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <!--User Login section starts-->
                    <div class="user-login-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="ui-list nav nav-tabs mb-30" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#login" role="tab" aria-selected="true">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#register" role="tab" aria-selected="false">Register</a>
                                        </li>
                                    </ul>
                                    <div class="login-wrapper">
                                        <div class="ui-dash tab-content">
                                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form id="login-form" action="#" method="post">
                                                            <div class="form-group">
                                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="email" value="" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-md-6 col-12 text-left">
                                                                    <div class="res-box">
                                                                        <input id="check-l" type="checkbox" name="check">
                                                                        <label for="check-l">Remember me</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12 text-right">
                                                                    <div class="res-box sm-left">
                                                                        <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-box text-center mt-30">
                                                                <button type="submit" class="btn v8"><span class="lnr lnr-exit"></span> Log In</button>
                                                            </div>
                                                        </form>
                                                        <div class="social-profile-login  text-left mt-20">
                                                            <h5>or Login with</h5>
                                                            <ul class="social-btn">
                                                                <li class="bg-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li class="bg-tt"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li class="bg-ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="signup-wrapper">
                                                            <img src="images/others/login-1.png" alt="...">
                                                            <p>Welcome Back! Please Login to your Account for latest property listings.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="register" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form id="register-form" action="#" method="post">
                                                            <div class="form-group">
                                                                <input type="text" name="user_name" id="user_name" tabindex="1" class="form-control" placeholder="Username" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="user_password" id="user_password" tabindex="2" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <div class="res-box text-left">
                                                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                                <label for="remember">I've read and accept terms &amp; conditions</label>
                                                            </div>
                                                            <div class="res-box text-center mt-30">
                                                                <button type="submit" class="btn v8"><i class="lnr lnr-enter"></i>Sign Up</button>
                                                            </div>
                                                        </form>
                                                        <div class="social-profile-login  text-left mt-20">
                                                            <h5>or Sign Up with</h5>
                                                            <ul class="social-btn">
                                                                <li class="bg-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li class="bg-tt"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li class="bg-ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="signup-wrapper">
                                                            <img src="images/others/login-1.png" alt="...">
                                                            <p>Create an account to find the best Property for you.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--User login section ends-->
                </div>
            </div>
        </div>
    </div>
    <!--login Modal ends-->
    <!--Scripts starts-->
    <!--plugin js-->
    <script src="{{ asset('js/plugin.js')}} "></script>
    <!--google maps-->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;callback=initAutocomplete"></script> --}}
    <!--Main js-->
    <script src="{{ asset('js/main.js') }}"></script>
    <!--Scripts ends-->
</body>