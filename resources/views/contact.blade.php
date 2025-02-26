<x-frontend-layout>
    @slot('wrapper')
        <!-- section -->
        <div class="section hero-section">
            <div class="bg-wrap-container" data-scrollax-parent="true">
                <div class="bg bg-parallax" data-bg="{{asset('assets/frontend/images/bg/9.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="hero-section-title">
                    <h5>Get In Touch</h5>
                    <h2>Our contacts and location</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
        </div>
        <!--content-->
        <div class="content">
            <!--content-box-->
            <div class="content-box">
                <!-- breadcrumbs-wrap  -->
                <div class="breadcrumbs">
                    <div class="container">
                        <div class="breadcrumbs-wrap">
                            <a href="#">Home</a><span>Contacts</span>
                        </div>
                        <div class="hs-scroll-down-wrap">
                            <div class="scroll-down-item">
                                <span>Scroll Down To Discover</span>
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!--section -->
                <div class="section">
                    <div class="container">
                        <div class="boxed-content">
                            <div class="cards-wrap">
                                <div class="row">
                                    <!--card-item -->
                                    <div class="col-lg-4">
                                        <div class="card-item">
                                            <div class="card-item-wrap">
                                                <i class="fal fa-envelope"></i>
                                                <span class="card-item_num">01.</span>
                                                <div class="card-item-content">
                                                    <h4>Our Mails</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                    <a href="mailto:thearchsolutions@gmail.com" class="card-link">thearchsolutions@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="cf-inner_dec"></div>
                                        </div>
                                    </div>
                                    <!--card-item end -->
                                    <!--card-item -->
                                    <div class="col-lg-4">
                                        <div class="card-item">
                                            <div class="card-item-wrap">
                                                <i class="fal fa-phone-rotary"></i>
                                                <span class="card-item_num">02.</span>
                                                <div class="card-item-content">
                                                    <h4>Our Phones </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                    <a href="tel:+918006687890" class="card-link">+91-8006687890</a>
                                                    <a href="tel:+918006687890" class="card-link">+91-8006687890</a>
                                                </div>
                                            </div>
                                            <div class="cf-inner_dec"></div>
                                        </div>
                                    </div>
                                    <!--card-item end -->
                                    <!--card-item -->
                                    <div class="col-lg-4">
                                        <div class="card-item">
                                            <div class="card-item-wrap">
                                                <i class="fal fa-map-marked"></i>
                                                <span class="card-item_num">03.</span>
                                                <div class="card-item-content">
                                                    <h4>Our Adress </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                    <a href="#" class="card-link">Delhi NCR , Dehradun , Kotdwara</a>
                                                </div>
                                            </div>
                                            <div class="cf-inner_dec"></div>
                                        </div>
                                    </div>
                                    <!--card-item end -->
                                </div>
                            </div>
                            <div class="contacts-opt_container">
                                <div class="row">
                                    <!-- contacts-opt-wrap -->
                                    <div class="col-lg-7">
                                        <div class="contacts-opt-wrap">
                                            <div class="contact-notifer">We will try to answer the letter within a short
                                                time.</div>
                                            <a href="#" class="btn   float-btn   cf_btn act-cf"><i
                                                    class="fas fa-caret-right"></i><span>Write Message</span></a>
                                        </div>
                                    </div>
                                    <!-- contacts-card-item end-->
                                    <!-- contacts-opt-wrap -->
                                    <div class="col-lg-5">
                                        <div class="contacts-opt-wrap">
                                            <div class="contacts-opt-social">
                                                <div class="contact-notifer">Find us on:</div>
                                                <div class="footer-solcial">
                                                    <ul>
                                                        <li> <a href="#" target="_blank"><i
                                                                    class="fa-brands fa-facebook-f"></i></a> </li>
                                                        <li><a href="#" target="_blank"><i
                                                                    class="fa-brands fa-x-twitter"></i></a></li>
                                                        <li><a href="#" target="_blank"><i
                                                                    class="fa-brands fa-tiktok"></i></a></li>
                                                        <li><a href="#" target="_blank"><i
                                                                    class="fa-brands fa-instagram"></i></a></li>
                                                        <li><a href="#" target="_blank"><i
                                                                    class="fa-brands fa-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- contacts-opt-wrap end-->
                                </div>
                            </div>
                            <div class="row">
                                <!-- contacts-opt-wrap -->
                                <div class="col-lg-8">
                                    <!-- map-wrapper -->
                                    <div class="map-wrapper">
                                        <div class="map-container">
                                            <div id="map-single" class="map fs-wrapper" data-latlog="[28.457523 , 77.026344]"
                                                data-popuptext="Our Location in Gurugram ."></div>
                                        </div>
                                    </div>
                                    <!-- map-wrapper end -->
                                </div>
                                <!-- contacts-card-item end-->
                                <!-- contacts-opt-wrap -->
                                <div class="col-lg-4">
                                    <div class="wh_widget-wrap">
                                        <div class="wh_widget-item">
                                            <div class="bg" data-bg="{{asset('assets/frontend/images/bg/7.jpg') }}"></div>
                                            <div class="overlay"></div>
                                            <div class="wh_widget-container">
                                                <div class="contact-wh_title">Working Hours</div>
                                                <div class="contact-wh">
                                                    <div class="contact-wh-item">Monday - Friday:<strong> 8am - 6pm</strong>
                                                    </div>
                                                    <div class="contact-wh-item">Saturday - Sunday:<strong> 9am -
                                                            3pm</strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- contacts-opt-wrap end-->
                            </div>
                            <div class="bc_dec-line_h"></div>
                            <div class="bc_dec-line_v"></div>
                        </div>
                        <div class="section-dec fs-wrapper">
                            <div class="section-dec-top"></div>
                            <div class="section-dec-border"></div>
                            <div class="section-dec-bottom"></div>
                            <div class="section-dec-top_line"></div>
                            <div class="section-dec-bottom_line"></div>
                        </div>
                    </div>
                </div>
                <!--section end-->
            </div>
            <!-- content-box end -->
            <div class="content-dec">
                <div class="container">
                    <div class="content-dec-item"> <span></span> </div>
                </div>
            </div>
        </div>
        <!-- content end -->
    @endslot
</x-frontend-layout>
