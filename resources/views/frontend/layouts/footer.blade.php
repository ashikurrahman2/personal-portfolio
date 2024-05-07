    <!-- FOOTER AREA START -->
    <footer class="tj-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-logo-box">
                        <a href="">
                            <img src="{{asset('img/sitelogo.png')}}" alt=""></a>
                    </div>
                    <div class="footer-menu">
                        <nav>
                            <ul>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#resume-section">Resume</a></li>
                                <li><a href="#skills-section">Skills</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="copy-text">
                        <p>© 2024 All rights reserved by 
                            @foreach ( $links as $link )
                            <a href="{{ base64_decode($link->link) }}" target="_blank">{{ $link->account_name  }}</a></p>
                            @endforeach
                           
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
