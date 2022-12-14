<header class="header navbar-area style2">

    <div class="top-bar">
        <div class="container">
            <div class="inner-topbar">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="top-social">
                            <ul>
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a>
                                </li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a>
                                </li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="right-content d-flex">
                            <div class="login-button">
                                @if(Auth::check())
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="page-scroll dd-menu collapsed fs-6 fw-semibold" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-5" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="padding: 0;"><i class="lni lni-user"></i> {{Auth::user()->first_name}} {{Auth::user()->last_name}}</a>
                                            <ul class="sub-menu collapse" id="submenu-1-5">
                                                <li class="nav-item"><a href="user">Profile</a></li>
                                                <li class="nav-item"><a href="/logout">Logout</a></li>
                                                <li class="nav-item"><a href="/user-appointment">List Appointment</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                @else
                                    <ul>
                                        <li>
                                            <a href="/login"><i class="lni lni-enter"></i> Login</a>
                                        </li>
                                        <li>
                                            <a href="/register"><i class="lni lni-user"></i> Register</a>

                                        </li>
                                    </ul>
                                @endif
                            </div>
                            @if(Auth::check())
                                <div class="top-social navbar-nav ms-auto" style="top: 0px;">
                                    <ul>

                                        <li class="nav-item d-flex">
                                            <a style="padding: 0" class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-regular fa-bell fs-6 fw-semibold"></i>
                                                <span class="badge rounded-pill bg-danger" id="count">
                                                
                                                <span class="visually-hidden">unread messages</span></a>
                                            
                                            <ul class="sub-menu collapse" id="notif" style="overflow-y: scroll; width: 300px" >
                                                <li class="nav-link-customize">
                                                    <a href="/user-appointment" class="nav-link-customize">
                                                        <div class="d-flex">
                                                            <div class="me-3">
                                                                <i class="fa-solid fa-calendar-check fs-6 fw-semibold"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Appointment</p>
                                                                <p class="mb-0">You have a new appointment</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner" id="myDiv">

                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="/assets/img/favicon.svg" alt="Logo" style="height: 50px; width: 50px">
                        </a>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="active dd-menu collapsed" href="/" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Hospital</a>
                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="hospital">Hospital</a></li>
                                        <li class="nav-item"><a href="hospital-search">Hospital Search</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/departments" aria-label="Toggle navigation">Departments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Doctors</a>
                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="/doctor">Doctors</a></li>
                                        <li class="nav-item"><a href="/doctor-search">Doctor Search</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/blog" aria-label="Toggle navigation">Blog posts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact-us" aria-label="Toggle navigation">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="button add-list-button">
                            <a href="{{route('appointment.index')}}" class="btn" style="z-index: 0;">Book Appointment</a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>

