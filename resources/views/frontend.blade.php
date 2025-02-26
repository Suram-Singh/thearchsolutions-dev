<x-frontend-layout>
    @slot('wrapper')
        <!-- main-hero-wrap-->
        <div class="main-hero-wrap  full-height">
            <div class="main-hero-wrap-container full-height">
                <div class="fs-wrapper">
                    <!--slideshow-container-->
                    <div class="slideshow-container fs-wrapper">
                        <div class="slideshow-container_wrap fs-wrapper">
                            <div class="swiper-container full-height">
                                <div class="swiper-wrapper">
                                    <!--ms_item-->
                                    <div class="swiper-slide">
                                        <div class="ms-item_fs full-height  fl-wrap">
                                            <div class="bg" data-bg="{{asset('assets/frontend/images/bg/4.jpg') }}"></div>
                                        </div>
                                    </div>
                                    <!--ms_item end-->
                                    <!--ms_item-->
                                    <div class="swiper-slide ">
                                        <div class="ms-item_fs full-height fl-wrap">
                                            <div class="bg" data-bg="{{asset('assets/frontend/images/bg/5.jpg') }}"></div>
                                        </div>
                                    </div>
                                    <!--ms_item end-->
                                    <!--ms_item-->
                                    <div class="swiper-slide">
                                        <div class="ms-item_fs full-height fl-wrap">
                                            <div class="bg" data-bg="{{asset('assets/frontend/images/bg/8.jpg') }}"></div>
                                        </div>
                                    </div>
                                    <!--ms_item end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--slideshow-container end-->
                    <div class="overlay"></div>
                </div>
                <div class="hero_align_title hero_align_title_center">
                    <div class="container">
                        <div class="hero_align_title-container">
                            <div class="hhw_header">Welcome to Our Website</div>
                            <h2><a href="#sec1" class="custom-scroll-link">The Arch Solutions<br>Construction and Architecture
                                    <br> <span> Company</span></a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                Nulla finibus lobortis pulvinar. </p>
                            <a href="#sec1" class="btn hero-btn hero-btn2 custom-scroll-link"><span>Start Explore Our
                                    Company</span></a>
                        </div>
                    </div>
                </div>
                <div class="dec-corner dc_lb"></div>
                <div class="dec-corner dc_rb"></div>
                <div class="dec-corner dc_rt"></div>
                <div class="dec-corner dc_lt"></div>
                <div class="fs-dec-top"></div>
                <div class="cirle-dec"></div>
                <div class="fcwc-pagination_wrap">
                    <div class="fcwc-pagination"></div>
                </div>
            </div>
        </div>
        <!-- main-hero-wrap end-->
        <!--content-->
        <div class="content">
            <!--content-box-->
            <div class="content-box">
                <!-- breadcrumbs-wrap  -->
                <div class="breadcrumbs">
                    <div class="container">
                        <div class="breadcrumbs-wrap">
                            <a href="#">Home</a><span>Home Slideshow</span>
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
                <div class="section" id="sec1">
                    <div class="container">
                        <div class="boxed-content">
                            <div class="about-wrap single-box-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-wrap_sin">
                                            <div class="about-title ab-hero ab-hero2">
                                                <h2> Our Awesome Story</h2>
                                                <h4>Check video presentation to find out more about us .</h4>
                                            </div>
                                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla
                                                eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero
                                                sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est
                                                elit finibus tellus, ut tristique elit risus at metus. Sed tempor
                                                iaculis massa faucibus feugiat. </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in
                                                pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur
                                                nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi
                                                tincidunt. Curabitur convallis fringilla diam sed aliquam. Sed tempor
                                                iaculis massa faucibus feugiat. In fermentum facilisis massa, a
                                                consequat purus viverra. Aliquam erat volutpat.
                                            </p>
                                            <a href="{{ route('about') }}" class="btn   float-btn   cf_btn"
                                                style="margin-top:30px"><i class="fas fa-caret-right"></i><span>Read
                                                    more about us</span></a>
                                            <div class="dots-grid-dec"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="about-img ab_i2">
                                            <img src="{{asset('assets/frontend/images/all/1.jpg') }}" class="respimg" alt="">
                                            <div class="about-img-hotifer">
                                                <p>Your website is fully responsive so visitors can view your content
                                                    from their choice of device.</p>
                                                <h4>Mark Antony</h4>
                                                <h5>Renstate CEO</h5>
                                            </div>
                                            <div class="about-img-logo">The Arch Solutions</div>
                                            <div class="ab_i2-dec"></div>
                                        </div>
                                    </div>
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
                            <div class="section-dec-bottom_line"></div>
                        </div>
                    </div>
                </div>
                <!--section end-->
                <!--section -->
                <div class="section no-padding">
                    <div class="fw-container-wrap hidden-section">
                        <div class="fw-container">
                            <div class="half-carousel-wrap hidden-section">
                                <div class="half-carousel-title">
                                    <div class="half-carousel-title-wrap">
                                        <div class="half-carousel-title-container">
                                            <div class="half-carousel-title-item">
                                                <h2>Our Lastes Projects</h2>
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                                            </div>
                                        </div>
                                        <div class="ds_dec-grid fs-wrapper"></div>
                                        <div class="arrow_dec_wrap">
                                            <div class="arrow_dec"></div>
                                        </div>
                                        <div class="inline-arrows-wrap"></div>
                                    </div>
                                </div>
                                <div class="half-carousel-conatiner">
                                    <div class="half-carousel fl-wrap full-height">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!--half-carousel-item   -->
                                                <div class="swiper-slide">
                                                    <div class="half-carousel-item-box">
                                                        <div class="half-carousel-item fl-wrap">
                                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                                <div class="bg" data-bg="{{asset('assets/frontend/images/folio/10.jpg') }}"
                                                                    data-swiper-parallax="10%"></div>
                                                            </div>
                                                            <div class="grid-det_category"><a
                                                                    href="#">Renovate</a> <a
                                                                    href="#">Construction</a></div>
                                                            <div class="hc-counter">
                                                                <span class="fs-wrapper">01.</span>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="top:0;left: -50px; transform: rotate( -90deg)">
                                                                </div>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="bottom: -50px;right:-2px; transform: rotate( -90deg)">
                                                                </div>
                                                            </div>
                                                            <div class="half-carousel-content">
                                                                <h3><a href="{{ route('portfolio') }}">White Walls
                                                                        House</a></h3>
                                                                <p>Constant care and attention to the patients makes
                                                                    good record</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--half-carousel-item end -->
                                                <!--half-carousel-item   -->
                                                <div class="swiper-slide">
                                                    <div class="half-carousel-item-box">
                                                        <div class="half-carousel-item fl-wrap">
                                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                                <div class="bg" data-bg="{{asset('assets/frontend/images/folio/3.jpg') }}"
                                                                    data-swiper-parallax="10%"></div>
                                                            </div>
                                                            <div class="grid-det_category"><a
                                                                    href="#">Renovate</a> <a
                                                                    href="#">Construction</a></div>
                                                            <div class="hc-counter">
                                                                <span class="fs-wrapper">02.</span>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="top:0;left: -50px; transform: rotate( -90deg)">
                                                                </div>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="bottom: -50px;right:-2px; transform: rotate( -90deg)">
                                                                </div>
                                                            </div>
                                                            <div class="half-carousel-content">
                                                                <h3><a href="{{ route('portfolio') }}">Project Endoran</a>
                                                                </h3>
                                                                <p>Constant care and attention to the patients makes
                                                                    good record</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--half-carousel-item end -->
                                                <!--half-carousel-item   -->
                                                <div class="swiper-slide">
                                                    <div class="half-carousel-item-box">
                                                        <div class="half-carousel-item fl-wrap">
                                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                                <div class="bg" data-bg="{{asset('assets/frontend/images/folio/5.jpg') }}"
                                                                    data-swiper-parallax="10%"></div>
                                                            </div>
                                                            <div class="grid-det_category"><a
                                                                    href="#">Renovate</a> <a
                                                                    href="#">Construction</a></div>
                                                            <div class="hc-counter">
                                                                <span class="fs-wrapper">03.</span>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="top:0;left: -50px; transform: rotate( -90deg)">
                                                                </div>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="bottom: -50px;right:-2px; transform: rotate( -90deg)">
                                                                </div>
                                                            </div>
                                                            <div class="half-carousel-content">
                                                                <h3><a href="{{ route('portfolio') }}">Trinity River
                                                                        Renovate</a></h3>
                                                                <p>Constant care and attention to the patients makes
                                                                    good record</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--half-carousel-item end -->
                                                <!--half-carousel-item   -->
                                                <div class="swiper-slide">
                                                    <div class="half-carousel-item-box">
                                                        <div class="half-carousel-item fl-wrap">
                                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                                <div class="bg" data-bg="{{asset('assets/frontend/images/folio/9.jpg') }}"
                                                                    data-swiper-parallax="10%"></div>
                                                            </div>
                                                            <div class="grid-det_category"><a
                                                                    href="#">Renovate</a> <a
                                                                    href="#">Construction</a></div>
                                                            <div class="hc-counter">
                                                                <span class="fs-wrapper">04.</span>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="top:0;left: -50px; transform: rotate( -90deg)">
                                                                </div>
                                                                <div class="svg-corner svg-corner_dark"
                                                                    style="bottom: -50px;right:-2px; transform: rotate( -90deg)">
                                                                </div>
                                                            </div>
                                                            <div class="half-carousel-content">
                                                                <h3><a href="{{ route('portfolio') }}">World Trade
                                                                        Center</a></h3>
                                                                <p>Constant care and attention to the patients makes
                                                                    good record</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--half-carousel-item end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="half-carusel-controls-wrap">
                                        <div class="hcw_btn_wrap">
                                            <div class="hcw_btn_contol hcw-cont-prev"><i
                                                    class="fa-solid fa-chevron-left"></i></div>
                                            <div class="hcw_btn_contol hcw-cont-next"><i
                                                    class="fa-solid fa-chevron-right"></i></div>
                                        </div>
                                        <div class="half-carusel_pagination_wrap">
                                            <div class="half-carusel_pagination hc-pag"></div>
                                        </div>
                                        <div class="hc_counter_wrap">
                                            <div class="hc_counter2">
                                                <div class="current_c2">01</div>
                                                <div class="total_c2"></div>
                                            </div>
                                        </div>
                                        <a href="{{ route('portfolio') }}" class="hcw_btn"><span>View all Projects</span><i
                                                class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--section end-->
                <!--section -->
                <div class="section">
                    <div class="container">
                        <div class="boxed-content">
                            <div class="main-section_text-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>What We Do</h4>
                                        <h2>We Offer Smarter & More Affordable Access To <br> Construction and
                                            Architecture Services. <br> We Are The Arch Solutions.</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="margin-top: 40px">Aiusmod tempor incididunt ut labore sed dolore
                                            magna aliquay dnim ad minim veniam quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea reprehen deritin voluptate.</p>
                                        <p>Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.
                                            Curabitur convallis fringilla diam sed aliquam. Aiusmod tempor incididunt ut
                                            labore sed dolore magna aliquay dnim ad minim veniam quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-wrap">
                                <div class="row">
                                    <!--card item -->
                                    <div class="col-md-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-light fa-trowel-bricks"></i>
                                                        </div>
                                                        <h2>Interior Renovation</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
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
                                    <div class="col-md-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-light fa-truck-plow"></i>
                                                        </div>
                                                        <h2>General Contracting</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
                                                        </p>
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
                                    <div class="col-md-4">
                                        <a class="content-inner" href="{{ route('services') }}">
                                            <div class="content-front">
                                                <div class="cf-inner">
                                                    <div class="inner">
                                                        <div class="dec-icon">
                                                            <i class="fa-regular fa-ruler-triangle"></i>
                                                        </div>
                                                        <h2>Building Engineering</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
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
                        <div class="serv-dec-btn-wrap">
                            <a href="{{ route('services') }}"><span>View all Services </span> <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                        <div class="section-number"> <span>0</span>2. </div>
                    </div>
                </div>
                <!--section end-->
                <!--section -->
                <div class="section wide-section">
                    <div class="bg-wrap fs-wrapper bg-wrap_half">
                        <div class="bg-wrap-container" data-scrollax-parent="true">
                            <div class="bg bg-parallax" data-bg="{{asset('assets/frontend/images/bg/7.jpg') }}"
                                data-scrollax="properties: { translateY: '30%' }"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="wide_section-title">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Some Facts About Us</h5>
                                    <h3>Leading Way In Building &amp; Civil Construction!</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="wide_section-container">
                                        <div class="cc-car-title">
                                            Our Partners
                                            <div class="svg-corner svg-corner_dark"
                                                style="bottom: 0;right:-40px; transform: rotate(  90deg)"></div>
                                        </div>
                                        <div class="clients-carousel-wrap">
                                            <div class="clients-carousel">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                                        <!--client-item-->
                                                        <div class="swiper-slide">
                                                            <a href="#" class="client-item"><img
                                                                    src="{{asset('assets/frontend/images/clients/1.png') }}" alt=""></a>
                                                        </div>
                                                        <!--client-item end-->
                                                        <!--client-item-->
                                                        <div class="swiper-slide">
                                                            <a href="#" class="client-item"><img
                                                                    src="{{asset('assets/frontend/images/clients/2.png') }}" alt=""></a>
                                                        </div>
                                                        <!--client-item end-->
                                                        <!--client-item-->
                                                        <div class="swiper-slide">
                                                            <a href="#" class="client-item"><img
                                                                    src="{{asset('assets/frontend/images/clients/1.png') }}" alt=""></a>
                                                        </div>
                                                        <!--client-item end-->
                                                        <!--client-item-->
                                                        <div class="swiper-slide">
                                                            <a href="#" class="client-item"><img
                                                                    src="{{asset('assets/frontend/images/clients/2.png') }}" alt=""></a>
                                                        </div>
                                                        <!--client-item end-->
                                                        <!--client-item-->
                                                        <div class="swiper-slide">
                                                            <a href="#" class="client-item"><img
                                                                    src="{{asset('assets/frontend/images/clients/1.png') }}" alt=""></a>
                                                        </div>
                                                        <!--client-item end-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cc-controls-wrap">
                                            <div class="cc-btn   cc-prev"><i class="fas fa-angle-left"></i></div>
                                            <div class="cc-btn cc-next"><i class="fas fa-angle-right"></i></div>
                                            <div class="svg-corner svg-corner_dark"
                                                style="top: 0;left:-40px; transform: rotate(  -90deg)"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dark-box-bg">
                            <div class="half-carousel-title">
                                <div class="half-carousel-title-wrap">
                                    <div class="half-carousel-title-container">
                                        <div class="half-carousel-title-item">
                                            <h2>Why Choose Us</h2>
                                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</h5>
                                        </div>
                                    </div>
                                    <div class="ds_dec-grid fs-wrapper"></div>
                                    <div class="arrow_dec_wrap">
                                        <div class="arrow_dec"></div>
                                    </div>
                                    <div class="inline-arrows-wrap"></div>
                                </div>
                            </div>
                            <div class="accordeon-container">
                                <div class="accordian">
                                    <!--accordian__item -->
                                    <div class="accordian__item active">
                                        <div class="accordian__heading">
                                            <div class="accordian__heading_item">
                                                <span class="acc-heading-number">01.</span>
                                                <h4><span>New Technology</span></h4>
                                                <i class="fa-light fa-microchip"></i>
                                            </div>
                                        </div>
                                        <div class="accordian__body">
                                            <div class="accordian__body-container">
                                                <div class="accordian__body-box">
                                                    <div class="accordian__body-box_content">
                                                        <h5><span>01.</span>New Technology</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Proin ornare sem sed quam tempus aliquet vitae eget dolor.
                                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                                            elementum. Suspendisse id neque a nibh mollis blandit.</p>
                                                        <ul class="pdcw_list">
                                                            <li>Concept</li>
                                                            <li>Design</li>
                                                            <li>3D Modeling</li>
                                                        </ul>
                                                        <i class="fa-light fa-microchip"></i>
                                                    </div>
                                                </div>
                                                <div class="accordian__body-bg">
                                                    <div class="bg-wrap fs-wrapper">
                                                        <div class="bg" data-bg="{{asset('assets/frontend/images/all/8.jpg') }}"></div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--accordian__item end -->
                                    <!--accordian__item -->
                                    <div class="accordian__item">
                                        <div class="accordian__heading">
                                            <div class="accordian__heading_item">
                                                <span class="acc-heading-number">02.</span>
                                                <h4><span>High Grade Tools</span></h4>
                                                <i class="fa-light fa-screwdriver-wrench"></i>
                                            </div>
                                        </div>
                                        <div class="accordian__body">
                                            <div class="accordian__body-container">
                                                <div class="accordian__body-box">
                                                    <div class="accordian__body-box_content">
                                                        <h5><span>02.</span>High Grade Tools</h5>
                                                        <p> Proin ornare sem sed quam tempus aliquet vitae eget dolor.
                                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                                            elementum. Suspendisse id neque a nibh mollis blandit. Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <ul class="pdcw_list">
                                                            <li>Design</li>
                                                            <li>Modeling</li>
                                                            <li>3D Concept</li>
                                                        </ul>
                                                        <i class="fa-light fa-screwdriver-wrench"></i>
                                                    </div>
                                                </div>
                                                <div class="accordian__body-bg">
                                                    <div class="bg-wrap fs-wrapper">
                                                        <div class="bg" data-bg="{{asset('assets/frontend/images/all/2.jpg') }}"></div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--accordian__item end -->
                                    <!--accordian__item -->
                                    <div class="accordian__item">
                                        <div class="accordian__heading">
                                            <div class="accordian__heading_item">
                                                <span class="acc-heading-number">03.</span>
                                                <h4><span>Green Energy</span></h4>
                                                <i class="fa-light fa-wind-turbine"></i>
                                            </div>
                                        </div>
                                        <div class="accordian__body">
                                            <div class="accordian__body-container">
                                                <div class="accordian__body-box">
                                                    <div class="accordian__body-box_content">
                                                        <h5><span>03.</span>Green Energy</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Proin ornare sem sed quam tempus aliquet vitae eget dolor.
                                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                                            elementum. Suspendisse id neque a nibh mollis blandit.</p>
                                                        <ul class="pdcw_list">
                                                            <li>Concept</li>
                                                            <li>Design</li>
                                                            <li>3D Modeling</li>
                                                        </ul>
                                                        <i class="fa-light fa-wind-turbine"></i>
                                                    </div>
                                                </div>
                                                <div class="accordian__body-bg">
                                                    <div class="bg-wrap fs-wrapper">
                                                        <div class="bg" data-bg="{{asset('assets/frontend/images/all/3.jpg') }}"></div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--accordian__item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--section end-->
                <!--section -->
                <div class="section" style="padding-top: 30px">
                    <div class="container  " style="margin-bottom: 60px;">
                        <div class="boxed-content">
                            <div class="section-title">
                                <h4>What said about us</h4>
                                <h2>Testimonials and Clients</h2>
                                <div class="mr_title_dec"></div>
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
                    <div class="testimonilas-carousel-wrap">
                        <div class="testimonilas-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testimonilas-text">
                                                <div class="testi-header">
                                                    <div class="testi-avatar"><img src="{{asset('assets/frontend/images/avatar/3.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Centa Simpson</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non,
                                                            ultrices ac nunc. Mauris non ligula suscipit, vulputate mi
                                                            accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor
                                                            sit amet sem non porta. Lorem ipsum dolor sit amet, conse
                                                            ctetuer adipiscing elit, sed diam nonu mmy nibh euismod
                                                            tincidunt ut . "</p>
                                                    </div>
                                                </div>
                                                <span class="testi-number">01.</span>
                                            </div>
                                            <div class="testi-footer">
                                                <a href="#" class="testi-link" target="_blank">Via
                                                    X-Twitter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testimonilas-text">
                                                <div class="testi-header">
                                                    <div class="testi-avatar"><img src="{{asset('assets/frontend/images/avatar/2.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Andy Dimasky</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit,
                                                            sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat. Vestibulum orci felis, ullamcorper non
                                                            condimentum non, ultrices ac nunc. Mauris non ligula
                                                            suscipit, vulputate mi accumsan, dapibus felis. "</p>
                                                    </div>
                                                </div>
                                                <span class="testi-number">02.</span>
                                            </div>
                                            <div class="testi-footer">
                                                <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testimonilas-text">
                                                <div class="testi-header">
                                                    <div class="testi-avatar"><img src="{{asset('assets/frontend/images/avatar/1.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Jannet Dellov</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Ultrices ac nunc. Mauris non ligula suscipit, vulputate mi
                                                            accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor
                                                            sit amet sem non porta. Lorem ipsum dolor sit amet, conse
                                                            ctetuer adipiscing elit, sed diam nonu mmy nibh euismod
                                                            tincidunt ut laoreet dolore magna aliquam erat. "</p>
                                                    </div>
                                                </div>
                                                <span class="testi-number">03.</span>
                                            </div>
                                            <div class="testi-footer">
                                                <a href="#" class="testi-link" target="_blank">Via
                                                    Instagram</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testimonilas-text">
                                                <div class="testi-header">
                                                    <div class="testi-avatar"><img src="{{asset('assets/frontend/images/avatar/5.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Nicolo Svensky</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh
                                                            euismod tincidunt ut laoreet dolore magna aliquam erat.
                                                            Vestibulum orci felis, ullamcorper non condimentum non,
                                                            ultrices ac nunc. Mauris non ligula suscipit, vulputate mi
                                                            accumsan, dapibus felis. "</p>
                                                    </div>
                                                </div>
                                                <span class="testi-number">04.</span>
                                            </div>
                                            <div class="testi-footer">
                                                <a href="#" class="testi-link" target="_blank">Via
                                                    X-Twitter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                </div>
                            </div>
                        </div>
                        <div class="fwc-controls_wrap">
                            <div class="solid-pagination_btns tcs-pagination_init"></div>
                            <div class="tc-button tc-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                            <div class="tc-button tc-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
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
