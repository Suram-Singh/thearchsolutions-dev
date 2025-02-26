<x-frontend-layout>
    @slot('wrapper')
        <!-- section -->
        <div class="section hero-section">
            <div class="bg-wrap-container" data-scrollax-parent="true">
                <div class="bg bg-parallax" data-bg="{{ asset('assets/frontend/images/bg/4.jpg') }}"
                    data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="hero-section-title">
                    <h5>Who We are</h5>
                    <h2>About our company</h2>
                    <p> </p>
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
                            <a href="#">Home</a><span>About</span>
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
                            <div class="about-wrap single-box-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-wrap_sin">
                                            <div class="about-title ab-hero ab-hero2">
                                                <h2> Our Awesome Story</h2>
                                                <h4>Welcome to The Arch Solutions,</h4>
                                            </div>
                                            <p> where your vision for exquisite interiors and
                                                functional spaces becomes a reality. We are a premier design and
                                                construction
                                                company committed to delivering stunning designs and seamless turnkey
                                                projects. From concept to completion, our team of experts handles every
                                                detail,
                                                including interior execution and curated product selection.</p>
                                            <p>
                                                With over 10 years of experience and more than 150 satisfied clients across
                                                Delhi
                                                NCR and Uttarakhand in designing and construction, we bring a wealth of
                                                knowledge and expertise to every project. Led by our visionary owner and
                                                design
                                                head, Amit Gusain, The Arch Solutions specializes in crafting personalized
                                                spaces
                                                for residential and commercial clients alike. We don’t just focus on
                                                aesthetics but
                                                also offer comprehensive civil work, including 3D elevations, and
                                                construction
                                                services to ensure that every structure we design is as durable as it is
                                                beautiful.
                                            </p>
                                            <p>
                                                Discover how The Arch Solutions can transform your space into a blend of
                                                elegance, innovation, and functionality. Let’s build something extraordinary
                                                together!</p>
                                            <a href="{{ route('services') }}" class="btn   float-btn   cf_btn"
                                                style="margin-top:30px"><i class="fas fa-caret-right"></i><span>View Our
                                                    Services</span></a>
                                            <div class="dots-grid-dec"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="hero-image-collge-wrap">
                                            <div class="single-dec_img">
                                                <img src="{{ asset('assets/frontend/images/all/3.jpg') }}" alt=""
                                                    class="respimg">
                                            </div>
                                            <div class="hero_images-collage-item"
                                                style="width: 25%; bottom:  -35px; z-index: 15; left: -30px;"><img
                                                    src="{{ asset('assets/frontend/images/all/4.jpg') }}" class="respimg"
                                                    alt=""></div>
                                            <div class="hero_images-collage-item"
                                                style="width: 35%; top: -50px; z-index: 11; right: -50px;"><img
                                                    src="{{ asset('assets/frontend/images/all/6.jpg') }}" class="respimg"
                                                    alt=""></div>
                                            <div class="dc_dec-item_right">
                                                <h4><span>25</span>Years of experience</h4>
                                            </div>
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
                <!-- section   -->
                <div class="section  no-padding">
                    <div class="fw-container-wrap hidden-section">
                        <div class="fw-container parallax-section">
                            <div class="bg-wrap-item">
                                <div class="bg-wrap fs-wrapper">
                                    <div class="bg-wrap-container" data-scrollax-parent="true">
                                        <div class="bg bg-parallax" data-bg="{{ asset('assets/frontend/images/bg/1.jpg') }}"
                                            data-scrollax="properties: { translateY: '30%' }"></div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap inline_single-facts-wrap">
                                    <div class="inline-facts single-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="254">154</div>
                                            </div>
                                        </div>
                                        <h6>New Visiters Every Week</h6>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts single-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="12168">12168</div>
                                            </div>
                                        </div>
                                        <h6>Happy Customers Every Year</h6>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts single-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="172">172</div>
                                            </div>
                                        </div>
                                        <h6>Won Awards</h6>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts single-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="732">732</div>
                                            </div>
                                        </div>
                                        <h6>Weekly Deliveries</h6>
                                    </div>
                                    <div class="chart-dec"><span><i class="fal fa-plus"></i></span></div>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                    </div>
                </div>
                <!-- section end  -->
                <!--section -->
                <div class="section">
                    <div class="container  " style="margin-bottom: 60px;">
                        <div class="boxed-content">
                            <div class="section-title">
                                <h4>What said about us</h4>
                                <h2>Meet Our Team</h2>
                                <div class="mr_title_dec"></div>
                            </div>
                            <div class="team-container">
                                <div class="row">
                                    <!-- team-box   -->
                                    <div class="col-lg-4">
                                        <div class="team-box">
                                            <div class="team-photo">
                                                <img src="{{ asset('assets/frontend/images/team/2.jpg') }}" alt=""
                                                    class="respimg">
                                                <div class="team-info-btn"><i class="fa-light fa-plus"></i></div>
                                                <div class="team-details">
                                                    <div class="team-skills-container">
                                                        <span class="team-details_title ">Austin Skills:</span>
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item">
                                                            <span class="skill_title">Household Repairs</span>
                                                            <span class="skill-bar-percent">
                                                                90%</span>
                                                            <div class="team-skill" style="--prog: 90%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item ">
                                                            <span class="skill_title">Design and Build</span>
                                                            <span class="skill-bar-percent">
                                                                70%</span>
                                                            <div class="team-skill" style="--prog: 70%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item">
                                                            <span class="skill_title">Tiling and Painting</span>
                                                            <span class="skill-bar-percent">
                                                                83%</span>
                                                            <div class="team-skill" style="--prog: 83%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                    </div>
                                                    <div class="team-skills-container">
                                                        <span class="team-details_title ">More Details:</span>
                                                        <ul class="team-details_opt">
                                                            <li><span>Specialization: </span> Architect</li>
                                                            <li><span>Date of Birth: </span> 27 may 1990</li>
                                                            <li><span>Education: </span> New York University</li>
                                                            <li><span>Hobby: </span> Footbal , Traveling</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info">
                                                <h3>Amit Gusain</h3>
                                                <h4>Founder & CEO</h4>
                                                <p> </p>
                                            </div>
                                            <div class="agent-preofile-footer">
                                                <div class="agent-preofile-footer_title">Follow: </div>
                                                <div class="agent-preofile-footer-social">
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-facebook-f"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-x-twitter"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-tiktok"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- team-box   end-->
                                    <!-- team-box   -->
                                    <div class="col-lg-4">
                                        <div class="team-box">
                                            <div class="team-photo">
                                                <img src="{{ asset('assets/frontend/images/team/1.jpg') }}" alt=""
                                                    class="respimg">
                                                <div class="team-info-btn"><i class="fa-light fa-plus"></i></div>
                                                <div class="team-details">
                                                    <div class="team-skills-container">
                                                        <span class="team-details_title ">Austin Skills:</span>
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item">
                                                            <span class="skill_title">Household Repairs</span>
                                                            <span class="skill-bar-percent">
                                                                90%</span>
                                                            <div class="team-skill" style="--prog: 70%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item ">
                                                            <span class="skill_title">Design and Build</span>
                                                            <span class="skill-bar-percent">
                                                                70%</span>
                                                            <div class="team-skill" style="--prog: 80%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item">
                                                            <span class="skill_title">Tiling and Painting</span>
                                                            <span class="skill-bar-percent">
                                                                83%</span>
                                                            <div class="team-skill" style="--prog: 93%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                    </div>
                                                    <div class="team-skills-container">
                                                        <span class="team-details_title ">More Details:</span>
                                                        <ul class="team-details_opt">
                                                            <li><span>Specialization: </span> Engineer</li>
                                                            <li><span>Date of Birth: </span> 17 may 1982</li>
                                                            <li><span>Education: </span> New York University</li>
                                                            <li><span>Hobby: </span> Footbal , Traveling</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info">
                                                <h3>Radhika Yadav</h3>
                                                <h4>Creative Designer </h4>
                                                <p> </p>
                                            </div>
                                            <div class="agent-preofile-footer">
                                                <div class="agent-preofile-footer_title">Follow: </div>
                                                <div class="agent-preofile-footer-social">
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-facebook-f"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-x-twitter"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-tiktok"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- team-box   end-->
                                    <!-- team-box   -->
                                    <div class="col-lg-4">
                                        <div class="team-box">
                                            <div class="team-photo">
                                                <img src="{{ asset('assets/frontend/images/team/3.jpg') }}" alt=""
                                                    class="respimg">
                                                <div class="team-info-btn"><i class="fa-light fa-plus"></i></div>
                                                <div class="team-details">
                                                    <div class="team-skills-container">
                                                        <span class="team-details_title ">Austin Skills:</span>
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item">
                                                            <span class="skill_title">Household Repairs</span>
                                                            <span class="skill-bar-percent">
                                                                90%</span>
                                                            <div class="team-skill" style="--prog: 50%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item ">
                                                            <span class="skill_title">Design and Build</span>
                                                            <span class="skill-bar-percent">
                                                                70%</span>
                                                            <div class="team-skill" style="--prog: 60%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                        <!-- team-skills_item  -->
                                                        <div class="team-skills_item">
                                                            <span class="skill_title">Tiling and Painting</span>
                                                            <span class="skill-bar-percent">
                                                                83%</span>
                                                            <div class="team-skill" style="--prog: 90%;"></div>
                                                        </div>
                                                        <!-- team-skills_item end  -->
                                                    </div>
                                                    <div class="team-skills-container">
                                                        <span class="team-details_title ">More Details:</span>
                                                        <ul class="team-details_opt">
                                                            <li><span>Specialization: </span> Architect</li>
                                                            <li><span>Date of Birth: </span> 15 april 1998</li>
                                                            <li><span>Education: </span> New York University</li>
                                                            <li><span>Hobby: </span> Footbal , Traveling</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info">
                                                <h3>Jonny Saini</h3>
                                                <h4>Main Engineer</h4>
                                                <p> </p>
                                            </div>
                                            <div class="agent-preofile-footer">
                                                <div class="agent-preofile-footer_title">Follow: </div>
                                                <div class="agent-preofile-footer-social">
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-facebook-f"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-x-twitter"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a>
                                                    <a href="#" target="_blank"><i
                                                            class="fa-brands fa-tiktok"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- team-box   end-->
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
                            <a href="{{ route('contact') }}"><span>Get In touch with Us </span> <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- section end  -->
                <!-- section   -->
                <div class="section  no-padding">
                    <div class="fw-container-wrap hidden-section">
                        <div class="column-section-wrap fw-container">
                            <div class="column-wrap-bg">
                                <div class="bg-wrap fs-wrapper">
                                    <div class="bg-wrap-container" data-scrollax-parent="true">
                                        <div class="bg bg-parallax"
                                            data-bg="{{ asset('assets/frontend/images/bg/17.jpg') }}"
                                            data-scrollax="properties: { translateY: '30%' }"></div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                                <div class="video_section_container">
                                    <div class="container">
                                        <div class="video_section-title">
                                            <h4>Our promo video</h4>
                                            <h2>Get ready to start your exciting journey. <br> Our company will lead you
                                                through the amazing construction world.</h2>
                                        </div>
                                        <div class="promo-link big_prom     image-popup" id="html5-videos"
                                            data-html="#video1"><span class="color-bg"><i class="fas fa-play"></i></span>
                                        </div>
                                        <div style="display:none;" id="video1" class="popup_video"
                                            data-videolink="video/2.mp4">
                                            <video class="lg-video-object lg-html5" controls preload="none">
                                                <source src="https://trustbook.kwst.net/" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-section-container">
                                <div class="column-section-opions">
                                    <div class="fbc-nav">Why Coose Us <span class="bt_dec"></span></div>
                                    <ul>
                                        <li>
                                            <i class="fal fa-headset"></i>
                                            <h4>24 Hours Support </h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </li>
                                        <li>
                                            <i class="fal fa-users-cog"></i>
                                            <h4>User Admin Panel</h4>
                                            <p>Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.
                                                Curabitur convallis fringilla diam sed aliquam. </p>
                                        </li>
                                        <li>
                                            <i class="fal fa-phone-laptop"></i>
                                            <h4>Mobile Friendly</h4>
                                            <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa
                                                faucibus feugiat. In fermentum facilisis massa.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ds_dec-grid fs-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end  -->
                <!--section -->
                <div class="section">
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
                                                    <div class="testi-avatar"><img
                                                            src="{{ asset('assets/frontend/images/avatar/3.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Centa Simpson</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices
                                                            ac nunc. Mauris non ligula suscipit, vulputate mi accumsan,
                                                            dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem
                                                            non porta. Lorem ipsum dolor sit amet, conse ctetuer adipiscing
                                                            elit, sed diam nonu mmy nibh euismod tincidunt ut . "</p>
                                                    </div>
                                                </div>
                                                <span class="testi-number">01.</span>
                                            </div>
                                            <div class="testi-footer">
                                                <a href="#" class="testi-link" target="_blank">Via X-Twitter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testimonilas-text">
                                                <div class="testi-header">
                                                    <div class="testi-avatar"><img
                                                            src="{{ asset('assets/frontend/images/avatar/2.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Andy Dimasky</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed
                                                            diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna
                                                            aliquam erat. Vestibulum orci felis, ullamcorper non condimentum
                                                            non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi
                                                            accumsan, dapibus felis. "</p>
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
                                                    <div class="testi-avatar"><img
                                                            src="{{ asset('assets/frontend/images/avatar/1.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Jannet Dellov</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Ultrices ac nunc. Mauris non ligula suscipit, vulputate mi
                                                            accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit
                                                            amet sem non porta. Lorem ipsum dolor sit amet, conse ctetuer
                                                            adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat. "</p>
                                                    </div>
                                                </div>
                                                <span class="testi-number">03.</span>
                                            </div>
                                            <div class="testi-footer">
                                                <a href="#" class="testi-link" target="_blank">Via Instagram</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testimonilas-text">
                                                <div class="testi-header">
                                                    <div class="testi-avatar"><img
                                                            src="{{ asset('assets/frontend/images/avatar/5.jpg') }}"
                                                            alt=""></div>
                                                    <h3>Nicolo Svensky</h3>
                                                </div>
                                                <div class="testimonilas-text-item">
                                                    <div class="testimonilas-text-item-wrap">
                                                        <p>"Amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh
                                                            euismod tincidunt ut laoreet dolore magna aliquam erat.
                                                            Vestibulum orci felis, ullamcorper non condimentum non, ultrices
                                                            ac nunc. Mauris non ligula suscipit, vulputate mi accumsan,
                                                            dapibus felis. "</p>
                                                    </div>
                                                </div>
                                                <span class="testi-number">04.</span>
                                            </div>
                                            <div class="testi-footer">
                                                <a href="#" class="testi-link" target="_blank">Via X-Twitter</a>
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
