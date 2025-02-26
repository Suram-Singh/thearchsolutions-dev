<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Arch Solutions - Construction Architecture Reimagined') }}</title>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/cs-style.css') }}">
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}"> --}}
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
</head>

<body>
    <!-- lodaer  -->
    <div class="loader-wrap">
        <div class="loader-spin"><span></span></div>
    </div>
    <!-- loader end  -->
    <!--  main   -->
    <div id="main">
        <div class="cs-content-wrapper">
            <a href="#" class="logo-holder"><img src="{{ asset('assets/frontend/images/logo_wh.png') }}"
                    alt=""></a>
            <div class="cs-content">
                <h3>Under Construction</h3>
                <h4>Our Website is Coming Soon</h4>
                <p>We will be live shortly, your patience is deeply appreciated</p>
                <div class="contact-details fl-wrap">
                    <ul>
                        <li><span>01. Write :</span><a href="#">thearchsolutions@gmail.com</a></li>
                        <li><span>02. Call:</span> <a href="#">+91-8006687890</a></li>
                    </ul>
                </div>
                <div class="sq-dec" style="top: -110px; left: 0;"></div>
                <div class="sq-dec" style="bottom: -130px; left: 0;"></div>
            </div>
            <div class="arrow_dec_wrap">
                <div class="arrow_dec"></div>
            </div>
            <div class="arrow_dec_wrap2">
                <div class="arrow_dec"></div>
            </div>
            <div class="ds_dec-grid"></div>
        </div>
        <div class="cs-content-media">
            <div class="cs-content-media-social">
                <ul>
                    <li> <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a> </li>
                    <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
                <div class="svg-corner svg-corner_dark" style="top:10px;left:  -35px; transform: rotate( -90deg)"></div>
            </div>
            <div class="bg" data-bg="images/bg/11.jpg"></div>
            <div class="overlay"></div>
            <div class="serv-dec-btn-wrap act-cf">
                <a href="#"><span>Get In Touch </span> <i class="fa-regular fa-arrow-right"></i></a>
            </div>
            <!-- cs-media-container -->
            <div class="cs-media-container counter-widget" data-countDate="09/12/2026">
                <!-- countdown -->
                <div class="countdown">
                    <div class="cs-countdown-item">
                        <span class="days rot">00</span>
                        <h4>Days</h4>
                    </div>
                    <div class="cs-countdown-item">
                        <span class="hours rot">00</span>
                        <h4>Hours </h4>
                    </div>
                    <div class="cs-countdown-item">
                        <span class="minutes rot">00</span>
                        <h4>Minutes </h4>
                    </div>
                    <div class="cs-countdown-item no-dec">
                        <span class="seconds rot">00</span>
                        <h4>Seconds</h4>
                    </div>
                </div>
                <!-- countdown end -->
            </div>
            <!--cs-media-container end -->
            <div class="showcase-dec_container">
                <div class="showcase-dec_corner sdc_topleft"></div>
                <div class="showcase-dec_corner sdc_topright"></div>
                <div class="showcase-dec_corner sdc_bottomleft"></div>
                <div class="showcase-dec_corner sdc_bottomright"></div>
                <div class="showcase-dec_line sdl_right"></div>
                <div class="showcase-dec_line sdl_left"></div>
                <div class="showcase-dec_line sdl_top"></div>
            </div>
        </div>
        <!--contact-form-wrap -->
        <div class="contact-form-wrap">
            <div class="contact-form-container">
                <div class="contact-form-container-box">
                    <div class="contact-form-header">
                        <h4>Get In Touch</h4>
                        <div class="close-modal close-cf "><span><i class="fa-regular fa-xmark"></i></span></div>
                    </div>
                    <div class="contact-form-main">
                        <div id="contact-form" class="contact-form custom-form">
                            <div id="message"></div>
                            <form class="custom-form" action="#" name="contactform" id="contactform">
                                <fieldset>
                                    <!-- listsearch-input-item -->
                                    <div class="cs-intputwrap">
                                        <i class="fa-light fa-user"></i>
                                        <input type="text" name="name" id="name"
                                            placeholder="Your Name *">
                                    </div>
                                    <!-- listsearch-input-item -->
                                    <!-- listsearch-input-item -->
                                    <div class="cs-intputwrap ">
                                        <i class="fa-light fa-envelope"></i>
                                        <input type="text" name="email" id="email"
                                            placeholder="Email Address*">
                                    </div>
                                    <!-- listsearch-input-item -->
                                    <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                </fieldset>
                                <button class="commentssubmit" style="margin-top:15px;" id="submit"> <span>Send
                                        Message</span></button>
                            </form>
                        </div>
                        <!-- contact form  end-->
                    </div>
                </div>
            </div>
            <div class="body-overlay contact-form-overlay fs-wrapper"></div>
        </div>
        <!--contact-form-wrap end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/cs-scripts.js') }}"></script>
</body>

</html>
