{{-- Start Contact section --}}
<section class="contact-section" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 order-2 order-md-1">
                <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="section-header">
                        <h2 class="section-title">Let’s work together!</h2>
                        <p>I design and code beautifully simple things and i love what i do. Just simple like
                            that!
                        </p>
                    </div>
{{-- 
                    <div class="tj-contact-form">
                        <form action="">
                            <div class="row gx-3">
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input type="text" name="fname" id="fname" placeholder="First name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input type="text" name="lname" id="lname" placeholder="Last name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input type="email" name="email" id="email" placeholder="Email address" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input type="tel" name="phone" id="phone" placeholder="Phone number" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form_group">
                                        <select name="service" id="service" class="tj-nice-select" style="display: none;">
                                            <option value="" selected="" disabled="">Choose Service</option>
                                            <option value="braning">Branding Design</option>
                                            <option value="web">Web Design</option>
                                            <option value="uxui">UI/UX Design</option>
                                            <option value="app">App Design</option>
                                        </select><div class="nice-select tj-nice-select" tabindex="0"><span class="current">Choose Service</span><ul class="list"><li data-value="" class="option selected disabled">Choose Service</li><li data-value="braning" class="option">Branding Design</li><li data-value="web" class="option">Web Design</li><li data-value="uxui" class="option">UI/UX Design</li><li data-value="app" class="option">App Design</li></ul></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form_group">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form_btn">
                                        <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>

            {{-- Information section --}}
            <div class="col-lg-5 offset-lg-1 col-md-5  d-flex flex-wrap align-items-center  order-1 order-md-2">
                <div class="contact-info-list">
                    <ul class="ul-reset">
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                            <div class="icon-box">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            
                            {{-- Phone number section --}}
                            <div class="text-box">
                                <p>Phone</p>
                                <a href="">{{$contacts->phone}}</a>
                            </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                            <div class="icon-box">
                                <i class="flaticon-mail-inbox-app"></i>
                            </div>

                            {{-- Email Section --}}
                            <div class="text-box">
                                <p>Email</p>
                                <a href="">{{base64_decode($contacts->email)}}</a>
                            </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                            <div class="icon-box">
                                <i class="flaticon-location"></i>
                            </div>

                            {{-- Address Section --}}
                            <div class="text-box">
                                <p>Address</p>
                                <a href="">{{$contacts->address}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

    
