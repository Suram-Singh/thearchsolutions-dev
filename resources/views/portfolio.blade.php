<x-frontend-layout>
    @slot('wrapper')
        <!--content-->
        <div class="content">
            <!--content-box-->
            <div class="content-box content-box_dark">
                <div class="fs-gallery-filters-container">
                    <div class="gallery-filters-wrap">
                        <div class="fixed-filters_title filter-button dark-bg2"><i class="fa-regular fa-bars-filter"></i>Projects Filters</div>
                        <div class="gallery-filters hid-filter">
                            <a href="#" class="gallery-filter gallery-filter-active" data-filter="*"><span>All Projects</span></a>
                            <a href="#" class="gallery-filter " data-filter=".renovate"><span>Renovate</span></a>
                            <a href="#" class="gallery-filter" data-filter=".bulding"><span>Bulding</span></a>
                            <a href="#" class="gallery-filter" data-filter=".architecture"><span>Architecture</span></a>
                        </div>
                        <div class="count-folio">
                            <div class="num-album"></div>
                            <div class="all-album"></div>
                        </div>
                    </div>
                </div>
                <div class="gallery-items three-columns gi-fw2">
                    <div class="gallery-items-container">
                        <!-- gallery-item-->
                        <div class="gallery-item  bulding  renovate">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">House</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/1.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/1.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>Greenhouse Construction</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->
                        <!-- gallery-item-->
                        <div class="gallery-item    bulding">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">Bulding</a></li>
                                    <li><a href="#" class="cat-opt">House</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/2.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/2.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>White Walls House</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->
                        <!-- gallery-item-->
                        <div class="gallery-item bulding gallery-item-second">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">Bulding</a></li>
                                    <li><a href="#" class="cat-opt">House</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/13.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/13.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>Park Life Renovate</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->
                        <!-- gallery-item-->
                        <div class="gallery-item   bulding renovate">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">Bulding</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/4.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/4.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>Project Endoran</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->
                        <!-- gallery-item-->
                        <div class="gallery-item  architecture  bulding">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">Renovare</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/5.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/5.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>Trinity River Renovate</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->
                        <!-- gallery-item-->
                        <div class="gallery-item  renovate  architecture">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">Architecture</a></li>
                                    <li><a href="#" class="cat-opt">House</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/6.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/6.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>World Trade Center</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->								
                        <!-- gallery-item-->
                        <div class="gallery-item   bulding renovate">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">House</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/7.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/7.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>Spire Edge Center</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->
                        <!-- gallery-item-->
                        <div class="gallery-item  architecture  renovate">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">Building</a></li>
                                    <li><a href="#" class="cat-opt">House</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/8.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/8.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>Wood River Ships Center</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->									
                        <!-- gallery-item-->
                        <div class="gallery-item bulding architecture">
                            <div class="grid-item-holder hov_zoom">
                                <ul class="post_header_cat">
                                    <li><a href="#" class="cat-opt">Rooms</a></li>
                                    <li><a href="#" class="cat-opt">House</a></li>
                                </ul>
                                <img  src="{{asset('assets/frontend/images/folio/9.jpg') }}"    alt="">
                                <a href="{{asset('assets/frontend/images/folio/9.jpg') }}" class="box-media-zoom   single-popup-image"><i class="fal fa-search"></i></a>
                                <div class="overlay"></div>
                                <div class="grid-item-det-wrap">
                                    <div class="grid-item-det"><a href="{{ route('portfolio') }}"><span>Theatre de Stoep</span><i class="fa-regular fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->								
                    </div>
                </div>
            </div>
            <!-- content-box end -->
            <div class="order-wrap order-wrap_fw">
                <div class="row">
                    <div class="col-md-8">
                        <div class="ticker">Ready to order your project or services? Get in touch with us</div>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('contact') }}" class="btn"><span>Get In Touch</span><i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- content end -->
    @endslot
</x-frontend-layout>
