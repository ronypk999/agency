
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="/">
                        <span class="w3yellow">Work</span>Core
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="/services">Services</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item search-right">
                            <a href="#search" class="btn search-btn" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                    <form action="#" method="GET" class="search-box d-flex position-relative">
                                        <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- /search popup -->
                        </li>
                    </ul>
                    <!--/search-right-->
                    <ul class="header-search me-lg-4">
                        <li class="get-btn">
                            <a href="/contact" class="btn btn-style btn-primary" title="search">Get Started <i class="fas fa-arrow-right ms-lg-4 ms-2"></i></a>
                        </li>

                    </ul>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header> 
    <!--//Header-->