  <!-- HERO SECTION START -->
       <section class="hero-section d-flex align-items-center" id="intro">
        <div class="intro_text">
            <svg viewBox="0 0 1320 300">
                <text x="50%" y="50%" text-anchor="middle">
                    HI
                </text>
            </svg>
        </div>

        {{-- Banner section --}}
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-content-box">
                        <span class="hero-sub-title">I am Ashikur Rahman</span>
                        <h1 class="hero-title">Full stack Web Developer
                        </h1>

                        <div class="hero-image-box d-md-none text-center">
                            <img src="{{asset('img/Profile-removebg-preview.png')}}" alt="">
                        </div>

                        <p class="lead">I break down complex user experience problems to create integrity solutions
                             that connect billions of people.</p>
                        <div class="button-box d-flex flex-wrap align-items-center">

                            {{-- Banner CV button section  --}}
                           
                            @foreach($mycv as $cv)
                            <a href="{{ route('download.cv', ['id' => $cv->id]) }}" class="btn tj-btn-secondary">Download CV</a>
                            
                            @endforeach
                            <ul class="ul-reset social-icons">
    
                                {{-- <li><a href=""><i class="fab fa-linkedin-in"></i></a></li> --}}
                                {{-- <li><a href=""><i class="fab fa-github"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Banner image section --}}
                <div class="col-md-6 d-none d-md-block">
                    <div class="hero-image-box text-center">
                        <img src="{{asset('img/Profile-removebg-preview.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="funfact-area">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number"><span class="odometer odometer-auto-theme" data-count="14"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span></div>
                            <div class="text">Years of <br>Experience</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number"><span class="odometer odometer-auto-theme" data-count="50"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</div>
                            <div class="text">Project <br>Completed</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number"><span class="odometer odometer-auto-theme" data-count="1.5"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-formatting-mark odometer-radix-mark">.</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>K</div>
                            <div class="text">Happy <br>Clients</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number">
                                <span class="odometer odometer-auto-theme" data-count="14"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span></div>
                            <div class="text">Years of <br>Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO SECTION END -->

<!-- Preloader Area Start -->
    
    <!-- Preloader Area End -->


    <!-- start: Back To Top -->
    <div class="preloader" style="translate: none; rotate: none; scale: none; transform: translate(0px, -1500px); display: none; z-index: -1;">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0 2S175 1 500 1s500 1 500 1V0H0Z"></path>
        </svg>

        <div class="preloader-heading">
            <div class="load-text" style="translate: none; rotate: none; scale: none; opacity: 0; transform: translate(0px, -100px);">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    {{-- <div class="progress-wrap" id="scrollUp">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div> --}}
    <div class="progress-wrap" id="scrollUp">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
            <!-- Scroll-up icon -->
            <svg x="30" y="30" width="40" height="40" viewBox="0 0 512 512" fill="currentColor">
                <path d="M501.941 435.53L278.657 212.083c-4.686-4.686-12.284-4.686-16.971 0L10.058 435.53c-4.686 4.686-4.686 12.284 0 16.971l18.641 18.641c4.686 4.686 12.284 4.686 16.971 0L256 268.285l211.3 211.856c4.686 4.686 12.284 4.686 16.97 0l18.671-18.671c4.686-4.686 4.686-12.284-.001-16.97z"/>
            </svg>
        </svg>
    </div>
    
 
    <!-- end: Back To Top -->

    
    <!-- HEADER START -->
    <header class="tj-header-area header-absolute">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">

                    {{-- Header logo section --}}
                    <div class="logo-box">
                        <a href="">
                            <img src="{{asset('img/sitelogo.png')}}" alt="">
                        </a>
                    </div>

                    {{-- Header Email Section --}}
                    <div class="header-info-list d-none d-md-inline-block">
                        <ul class="ul-reset">
                            <li><a href="">{{base64_decode($contacts->email)}}</a></li>
                        </ul>
                    </div>

                    {{-- Header menu section --}}
                    <div class="header-menu">
                        <nav>
                            <ul>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#resume-section">Resume</a></li>
                                <li><a href="#skills-section">Skills</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    {{-- Header Button section --}}
                    <div class="header-button">
                        <a href="" class="btn tj-btn-primary">Let's Go!</a>
                    </div>

                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Sticky Navbar --}}
    <header class="tj-header-area header-2 header-sticky sticky-out">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">

                    {{-- Sticky Header logo section --}}
                    <div class="logo-box">
                        <a href="">
                            <img src="{{asset('img/sitelogo.png')}}" alt="">
                        </a>
                    </div>
                        {{-- Sticky Header Email section --}}
                    <div class="header-info-list d-none d-md-inline-block">
                        <ul class="ul-reset">
                            <li><a href="">{{base64_decode($contacts->email)}}</a></li>
                        </ul>
                    </div>

                    {{-- Sticky Header menu section --}}
                    <div class="header-menu">
                        <nav>
                            <ul>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#resume-section">Resume</a></li>
                                <li><a href="#skills-section">Skills</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    {{-- Sticky Header button section --}}
                    <div class="header-button">
                        <a href="" class="btn tj-btn-primary">Let's Go!</a>
                    </div>
                
                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->


