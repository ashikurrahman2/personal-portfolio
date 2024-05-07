@extends('backend.layouts.app')

@section('title', 'AdminService')

@section('content')

<header class="tj-header-area header-2 header-sticky sticky-out">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">

                <div class="logo-box">
                    <a href="">
                        <img src="{{asset('img/sitelogo.png')}}" alt="">
                    </a>
                </div>

                <div class="header-info-list d-none d-md-inline-block">
                    <ul class="ul-reset">
                        <li><a href="">r.ashikur18@yahoo.com</a></li>
                    </ul>
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
@endsection