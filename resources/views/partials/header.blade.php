 
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('/assets/images/packt-logo.webp') }}" alt="Logo" style="width: 50px;">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="{{ url('#product') }}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="{{ url('#service') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="{{ url('#showcase') }}">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="{{ url('#team') }}">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="{{ url('#blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="{{ url('#contact') }}">Contact</a>
                                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>