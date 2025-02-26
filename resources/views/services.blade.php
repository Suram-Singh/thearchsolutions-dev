<x-frontend-layout>
    @slot('wrapper')
        <!-- section -->
        <div class="section hero-section">
            <div class="bg-wrap-container" data-scrollax-parent="true">
                <div class="bg bg-parallax" data-bg="{{asset('assets/frontend/images/bg/4.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="hero-section-title">
                    <h5>How we Works</h5>
                    <h2>our services and offers</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <div class="subbfooter_dec"></div>
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
                            <a href="#">Home</a><span>Services</span>
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
                            <div class="main-section_text-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>What We Do</h4>
                                        <h2>We Offer Smarter & More Affordable Access To <br> Construction and Architecture
                                            Services.
                                    </div>
                                    <div class="col-md-6">
                                        <p style="margin-top: 40px">At The Arch Solutions, we specialize in delivering seamless construction and interior
                                            execution services that transform your vision into reality. With over 10 years of
                                            experience, we manage every aspect of your project—from foundation to final
                                            touches—ensuring precision, transparency, and collaboration at every step. Our
                                            professional team prioritizes clear communication, meticulous attention to detail,
                                            and a stress-free experience, crafting spaces that blend functionality with stunning
                                            aesthetics. Trust us to create environments tailored to your lifestyle, where beauty
                                            and practicality come together effortlessly.
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-wrap">
                                <div class="row">
                                    <!--card item -->
                                    <div class="col-lg-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-light fa-trowel-bricks"></i>
                                                        </div>
                                                        <h2>Interior Design</h2>
                                                        <p>Transform your space with our creative and functional interior
                                                            designs. We specialize in crafting personalized, modern
                                                            aesthetics that reflect your unique style while maximizing
                                                            comfort and usability.
                                                            </p>
                                                    </div>
                                                    <div class="serv-num">01.</div>
                                                    <div class="cf-inner_dec"></div>
                                                </div>
                                            </div>
                                            <div class="content-back">
                                                <div class="bg " data-bg="{{asset('assets/frontend/images/services/1.jpg') }}"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <span class="cf-inner_title color-bg">Read more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--card item end -->
                                    <!--card item -->
                                    <div class="col-lg-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-light fa-truck-plow"></i>
                                                        </div>
                                                        <h2>Turnkey Projects</h2>
                                                        <p>Enjoy a hassle-free experience with our end-to-end turnkey
                                                            solutions. From concept to completion, we handle every detail,
                                                            including planning, execution, and finishing, delivering ready-touse spaces tailored to your needs</p>
                                                    </div>
                                                    <div class="serv-num">02.</div>
                                                    <div class="cf-inner_dec"></div>
                                                </div>
                                            </div>
                                            <div class="content-back">
                                                <div class="bg " data-bg="{{asset('assets/frontend/images/services/2.jpg') }}"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <span class="cf-inner_title color-bg">Read more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--card item end -->
                                    <!--card item -->
                                    <div class="col-lg-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-regular fa-ruler-triangle"></i>
                                                        </div>
                                                        <h2>Construction</h2>
                                                        <p>Build with confidence through our expert construction services.
                                                            From foundations to finishing, we ensure top-quality materials,
                                                            skilled labor, and strict adherence to timelines, creating spaces
                                                            that stand the test of time.
                                                            </p>
                                                    </div>
                                                    <div class="serv-num">03.</div>
                                                    <div class="cf-inner_dec"></div>
                                                </div>
                                            </div>
                                            <div class="content-back">
                                                <div class="bg " data-bg="{{asset('assets/frontend/images/services/3.jpg') }}"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <span class="cf-inner_title color-bg">Read more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--card item end -->
                                    <!--card item -->
                                    <div class="col-lg-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-light fa-bed-front"></i>
                                                        </div>
                                                        <h2>3D Elevations</h2>
                                                        <p>Visualize your dream space with our realistic 3D elevation
                                                            designs. Perfect for residential and commercial projects, these
                                                            detailed representations help bring your vision to life before
                                                            construction begins.</p>
                                                    </div>
                                                    <div class="serv-num">04.</div>
                                                    <div class="cf-inner_dec"></div>
                                                </div>
                                            </div>
                                            <div class="content-back">
                                                <div class="bg " data-bg="{{asset('assets/frontend/images/services/4.jpg') }}"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <span class="cf-inner_title color-bg">Read more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--card item end -->
                                    <!--card item -->
                                    <div class="col-lg-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-light fa-house-building"></i>
                                                        </div>
                                                        <h2>Consultancy & Supervision</h2>
                                                        <p>Benefit from our expert consultancy and supervision services to
                                                            ensure your project stays on track. We provide professional
                                                            guidance, quality checks, and oversight to achieve seamless
                                                            execution and the best outcomes.</p>
                                                    </div>
                                                    <div class="serv-num">05.</div>
                                                    <div class="cf-inner_dec"></div>
                                                </div>
                                            </div>
                                            <div class="content-back">
                                                <div class="bg " data-bg="{{asset('assets/frontend/images/services/5.jpg') }}"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <span class="cf-inner_title color-bg">Read more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--card item end -->
                                    <!--card item -->
                                    <div class="col-lg-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-light fa-flask-gear"></i>
                                                        </div>
                                                        <h2>Building Engineering</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                            in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                                    </div>
                                                    <div class="serv-num">06.</div>
                                                    <div class="cf-inner_dec"></div>
                                                </div>
                                            </div>
                                            <div class="content-back">
                                                <div class="bg " data-bg="{{asset('assets/frontend/images/services/6.jpg') }}"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <span class="cf-inner_title color-bg">Read more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--card item end -->
                                </div>
                            </div>
                            <div class="bc_dec-line_h"></div>
                            <div class="bc_dec-line_v"></div>
                        </div>
                        <div class="section-dec fs-wrapper">
                            <div class="section-dec-top"></div>
                            <div class="section-dec-border"></div>
                            <div class="section-dec-bottom"></div>
                            <div class="section-dec-top_line"></div>
                        </div>
                        <div class="serv-dec-btn-wrap" style="bottom: -30px">
                            <a href="{{asset('assets/frontend/pdf/TheArchSolutionsPresentation.pdf') }}" target="_blank"><span>Download Brochure PDF</span><i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--section end-->
                <div class="container">
                    <div class="post-banner-widget post-banner-widget_single " style="margin-bottom: 50px;">
                        <div class="bg-wrap-container">
                            <div class="bg" data-bg="{{asset('assets/frontend/images/bg/6.jpg') }}"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="post-banner-widget_content">
                            <h5>Participate in our loyalty program. Refer a friend and get a discount.</h5>
                            <p> Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod
                                tincidunt ut . Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. </p>
                            <a href="#">Read More About Programm</a>
                        </div>
                        <div class="arrow_dec_wrap">
                            <div class="arrow_dec"></div>
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
