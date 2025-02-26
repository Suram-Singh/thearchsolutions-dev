<!--  header-top  -->
<div class="header-top">
    <div class="container">
        <a class="top-header-logo" href="{{route('home')}}"></a>
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <div class="header-search_btn"><i class="fa fa-search transition"></i> </div>
        <!-- lang-wrap-->
        <div class="lang-wrap">
            <div class="show-lang"><span><i class="fa-thin fa-language"></i><strong>En</strong></span><i
                    class="fa fa-caret-down arrlan"></i></div>
            <ul class="lang-tooltip lang-action no-list-style">
                <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
            </ul>
        </div>
        <!-- lang-wrap end-->
        <div class="header-social">
            <ul>
                <li> <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a> </li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
        <!-- share button-->
        <div class="share-button showshare">
            <span>Share</span><i class="fa-regular fa-up-right-from-square"></i>
        </div>
        <!-- share button end-->
    </div>
    <div class="share-holder isShare">
        <div class="share-container"></div>
    </div>
    <!-- header-search-wrap -->
    <div class="header-search-wrap">
        <div class="widget-inner">
            <form action="#">
                <input name="se" id="se" type="text" class="search" placeholder="Search...">
                <button class="search-submit" id="submit_btn"><i class="fal fa-search transition"></i> </button>
            </form>
        </div>
    </div>
    <!-- header-search-wrap end -->
</div>
<!--  header-top end -->
<!-- header -->
<header class="main-header">
    <div class="header-container">
        <div class="header-inner">
            <a href="{{route('home')}}" class="logo-holder"> <img src="{{ asset('assets/frontend/images/logo_wh.png') }}"
                    alt=""> </a>
            <!--  navigation -->
            <div class="nav-title">Menu</div>
            <div class="nav-holder main-menu">
                <nav class="nav-inner" id="menu-init">
                    <ul>
                        <li>
                            <a href="{{route('home')}}" class="act-link"><i class="fa-light fa-house"></i>Home</a>
                        </li>
                        <li><a href="{{route('about')}}"><i class="fa-light fa-file-circle-info"></i>About</a></li>
                        <li><a href="{{route('services')}}"><i class="fa-light fa-trowel-bricks"></i>Services</a></li>
                        <li><a href="{{route('portfolio')}}"><i class="fa-light fa-house"></i>portfolio</a></li>
                        <li><a href="{{route('contact')}}"><i class="fa-light fa-envelopes-bulk"></i>Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->
            <div class="nav-title">Contacts</div>
            <div class="header-contact">
                <ul>
                    <li><i class="fa-light fa-envelope"></i><a href="mailto:thearchsolutions@gmail.com">
                            thearchsolutions@gmail.com</a></li>
                    <li><i class="fa-light fa-location-dot"></i><a href="https://goo.gl/maps/" target="_blank"> Delhi
                            NCR , Dehradun ,
                            Kotdwara</a></li>
                    <li><i class="fa-light fa-phone-rotary"></i><a href="tel:+918006687890"> +91-8006687890</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <a href="/contact" class="header_btn"><span>Request a Quote</span></a>
</header>
<!-- header end  -->
