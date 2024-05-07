<section class="skills-section" id="skills-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">My Skills</h2>
                    <p class=" wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">We put your ideas and thus your wishes in the
                        form of a unique web project that inspires you and you customers.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                    @foreach ($skills as $skill)
                    <div class="skill-item wow fadeInUp" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                        <div class="skill-inner">
                            <div class="icon-box">
                                <img src="{{asset($skill->image)}}" alt="">
                            </div>
                            <div class="number">{{$skill->parcentage_skills}}</div>
                        </div>
                        <p>{{$skill->title}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
