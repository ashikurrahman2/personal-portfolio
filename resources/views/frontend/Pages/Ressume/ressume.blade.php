<section class="resume-section" id="resume-section">
    <div class="container">
        <div class="row">
            @php
                $foundMyExperience = false;
                $foundMyEducation = false;
            @endphp
            
            @foreach ($ressumes as $ressume)
                @if ($ressume->name == "My Experience")
                    @php
                        $foundMyExperience = true;
                    @endphp
                @elseif ($ressume->name == "My Education")
                    @php
                        $foundMyEducation = true;
                    @endphp
                @endif
            @endforeach
            
            @if ($foundMyExperience)
            <div class="col-md-6">
                <div class="section-header wow fadeInUp" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <h2 class="section-title">My Experience</h2>
                </div>
                @foreach ($ressumes as $ressume)
                @if ($ressume->name == "My Experience")
                <div class="resume-widget">
                    <div class="resume-item wow fadeInLeft" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                        <div class="time">
                            {{$ressume->duration}}
                        </div>
                        <h3 class="resume-title">{{$ressume->experience_title}}</h3>
                        <div class="institute">
                            {{$ressume->address}}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            @endif
            
            @if ($foundMyEducation)
            <div class="col-md-6">
                <div class="section-header wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                    <h2 class="section-title">My Education</h2>
                </div>
                @foreach ($ressumes as $ressume)
                @if ($ressume->name == "My Education")
                <div class="resume-widget">
                    <div class="resume-item wow fadeInRight" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                        <div class="time">
                            {{$ressume->duration}}
                        </div>
                        <h3 class="resume-title">{{$ressume->experience_title}}</h3>
                        <div class="institute">
                            {{$ressume->address}}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            @endif     
        </div>
    </div>
</section>