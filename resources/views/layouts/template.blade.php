<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href={{ asset('"css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="ie-panel">
    <a href="http://windows.microsoft.com/en-US/internet-explorer/">
{{--        <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">--}}
    </a
    ></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <a href="{{ url('/') }}">
                                    <img class="brand-logo-light" src="{{URL::asset('images/logo.jpg')}}" alt="" width="140" />
                                </a></div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('about')}}">About Us</a>
                                    </li>

                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contact')}}">Contacts</a>
                                    </li>

                            </div>
                        </div><a class="button button-white button-sm" href="{{route('contact')}}">Become a Member</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Swiper-->
    <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;images/bg.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="box-default">
                    <h1 class="box-default-title">OYCO</h1>
                    <div class="box-default-decor"></div>
                    <h1 class="big box-default-text">  OBIDIENT-YUSUFUL CAMPAIGN ORGANIZATION</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-gray-1">
        <section class="section-transform-top">
            <div class="container">
                <div class="box-booking">
                    <form class="rd-form rd-mailform booking-form">
                        <div>
                            <p class="booking-title" text-center
                            >
                                <img src="{{URL::asset('images/call.png')}}" alt="Call" width="50" height="50"">
                            </p>
                            <div class="form-wrap">


                                <p>+234 81 7777 4111 </p>
                            </div>
                        </div>
                        <div>
                            <p class="booking-title" text-center
                            >
                                <img src="{{URL::asset('images/message.png')}}" alt="Message" width="50" height="50">
                            </p>
                            <div class="form-wrap">

{{--                                <label class="form-label" for="booking-name">Send Us a Message</label>--}}
                                 <h6>info@obidient-yusuful.com</h6>
                            </div>
                        </div>
                        <div>
                            <p class="booking-title" text-center
                            >
                                <a href="https://www.facebook.com/vaxworld">
                                <img src="{{URL::asset('images/facebook.png')}}" alt="Facebook"width="50" height="50">
                                </a>l
                            </p>
                            <div class="form-wrap">

{{--                                <label class="form-label" for="booking-name">Facebook</label>--}}
                                <p>Visit Us </p>
                            </div>
                        </div>
                        <div>
                            <p class="booking-title" text-center
                            >
                                <a href="https://www.instagram.com/vaxlive">
                                    <img src="{{URL::asset('images/instagram.png')}}" alt="Instagram" width="50" height="50">
                                </a>
                            </p>
                            <div class="form-wrap">

{{--                                <label class="form-label" for="booking-name">Instagram</label>--}}
                                <p>Visit Us </p>
                            </div>
                        </div>



                        <div>
                            <button class="button button-lg button-gray-600" type="submit">Become a Member</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
      @yield('content')
    </div>
    <!-- Featured Offers-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-lg-7 wow-outer">
                    <div class="wow slideInDown">
                        <h2>Our Goal</h2>
                        <p class="text-opacity-80">
                            To be a hundred percent democratic in Politics and help change the law to ensure that political processes, including elections, are controlled by citizens
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-20 row-lg-30">
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow fadeInUp">
                        <div class="product-featured">
                            <div class="product-featured-figure"><img src="{{URL::asset('images/mission.webp')}}" alt=""   height="400"/>
                                <div class="product-featured-button"><a class="button button-primary" href="{{route('about')}}">Our Mission</a></div>
                            </div>
                            <div class="product-featured-caption">
                                <h4>
                                    To join in nation building and  democracy through activism, education and collaboration
                                </h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow fadeInUp">
                        <div class="product-featured">
                            <div class="product-featured-figure"><img src="{{URL::asset('images/originality.jpg')}}" alt="" height="600"/>
                                <div class="product-featured-button"><a class="button button-primary" href="#">Quality</a></div>
                            </div>
                            <div class="product-featured-caption">
                                <h4>
                                    We believe in standards and strive to ensure that our work meets the standards of accuracy.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow fadeInUp">
                        <div class="product-featured">
                            <div class="product-featured-figure"><img src="{{URL::asset('images/vision.webp')}}" alt=""  height="400"/>
                                <div class="product-featured-button"><a class="button button-primary" href="{{route('about')}}">Our Vision</a></div>
                            </div>
                            <div class="product-featured-caption">
                                <h4>
                                    To support a visionary leader who is ready to create a society in which an informed and active citizenry is sovereign.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
   @yield('about')
    <!-- Page Footer-->
    <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
            <div class="wow fadeIn">
                <div class="row row-60">
                    <div class="col-12"><a href="{{url('/')}}"><img src="images/logo.jpg" alt="" width="140" /></a></div>
                    <div class="col-12">
                        <ul class="footer-minimal-nav">
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="social-list">
                            <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                            <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                            <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                            <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
                            <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>OYCO</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.createsoftware.com.ng">Vaxworld</a></p>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
