<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index-2.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ --> 
                <img src="{{asset('/')}}backend/assets/images/sitelogo.png" style="height: 55px;" width="50px;" alt="logo image"
                    class="logo-lg"></a>
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="nav-user-image"><a data-bs-toggle="collapse" href="#navuserlink"><img
                            src="{{asset('/')}}backend/assets/images/user/Profile image.jpg" alt="user-image"
                            class="user-avtar rounded-circle"></a></div>
                <div class="pc-user-collpsed collapse" id="navuserlink">
                    <h4 class="mb-0">Ashikur Rahman</h4><span>Administrator</span>
                    <ul>
                        <li><a class="pc-user-links"><i class="ph-duotone ph-user"></i> <span>My Account</span></a>
                        </li>
                        <li><a class="pc-user-links"><i class="ph-duotone ph-gear"></i> <span>Settings</span></a>
                        </li>
                        <li><a class="pc-user-links"><i class="ph-duotone ph-lock-key"></i><span>Lock
                                    Screen</span></a></li>
                        <li><a class="pc-user-links"><i class="ph-duotone ph-power"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Admin Dashboard</label></li>
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><i
                class="ph-duotone ph-gauge"></i> </span><span class="pc-mtext">Dashboard</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
    
                </li>

                   {{-- Upload CV Section --}}
                   <li class="pc-item pc-hasmenu"><a  class="pc-link"><span class="pc-micon"><i
                    class="ph-duotone ph-layout"></i> </span><span class="pc-mtext">CV</span> <span
                class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
        <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="{{route('allcvs.index')}}">
                Add CV</a>
            </li>
        </ul>
    </li>
                {{-- Services Section --}}
                <li class="pc-item pc-hasmenu"><a  class="pc-link"><span class="pc-micon"><i
                                class="ph-duotone ph-layout"></i> </span><span class="pc-mtext">Services</span> <span
                            class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{route('services.index')}}">
                            Add Services</a>
                        </li>
                    </ul>
                </li>
                {{-- Ressume Section --}}
                <li class="pc-item pc-hasmenu"><a href="#" class="pc-link"><span class="pc-micon"><i
                    class="ph-duotone ph-layout"></i> </span><span class="pc-mtext">Ressume</span> <span
                class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="{{route('ressumes.index')}}">
                        Add Ressume</a>
                    </li>
                </ul>
    </li>
                    {{-- Skills Section --}}
                <li class="pc-item pc-hasmenu"><a href="#" class="pc-link"><span class="pc-micon"><i
                    class="ph-duotone ph-layout"></i> </span><span class="pc-mtext">Skills</span> <span
                class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link"
                
            href="{{ route('skills.index') }}">Add Skills</a>
            </li>
        </ul>
     </li>


               {{-- Contact Section --}}
               <li class="pc-item pc-hasmenu"><a href="#" class="pc-link"><span class="pc-micon"><i
                class="ph-duotone ph-layout"></i> </span><span class="pc-mtext">Contact</span> <span
            class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
        <ul class="pc-submenu">
        <li class="pc-item"><a class="pc-link"
            
                href="{{ route('contact.index') }}">Add Contact</a>
        </li>
       
    </ul>
 </li>

            {{-- Account link Section --}}
            <li class="pc-item pc-hasmenu"><a href="#" class="pc-link"><span class="pc-micon"><i
                class="ph-duotone ph-layout"></i> </span><span class="pc-mtext">Account Link</span> <span
            class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
        <ul class="pc-submenu">
        <li class="pc-item"><a class="pc-link"
            
                href="{{ route('links.index') }}">Add Link</a>
        </li>
       
    </ul>
 </li>
</ul>
    </ul>

                     

        {{-- Help center section --}}
            <div class="card nav-action-card">
                <div class="card-body">
                    <h5 class="text-white">Help Center</h5>
                    <p class="text-white text-opacity-75">Please contact us for more questions.</p><a
                        target="_blank" href="" class="btn btn-primary">Go to
                        help Center</a>
                </div>
            </div>
        </div>
    </div>
</nav>