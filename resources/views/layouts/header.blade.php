<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center header-inner">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="{{route('portal.index')}}" class="scrollto"><img src="{{asset('logo/news.png')}}" alt="" title=""></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="{{route('portal.index')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                {{-- <li><a class="nav-link scrollto" href="#speakers">News Vendor</a></li> --}}
                <li class="dropdown"><a href="#"><span>News Vendor</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('portal.vendorOne')}}">Republika News</a></li>
                        <li><a href="{{route('portal.vendorTwo')}}">CNN News</a></li>
                        <li><a href="{{route('portal.vendorThree')}}">JPNN News</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        {{-- <a class="buy-tickets scrollto" href="#speakers">Get Started</a> --}}

    </div>
</header><!-- End Header -->
