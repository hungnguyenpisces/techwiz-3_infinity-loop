<header class="header navbar-area style2">

    <div class="top-bar">
        <div class="container">
            <div class="inner-topbar">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="top-social">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
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
                                    <!-- <li><a href="javascript:void(0)"><i class="fa-regular fa-bell fs-6 fw-semibold"></i>
                                            <span class="badge rounded-pill bg-danger">
                                                1
                                                <span class="visually-hidden">unread messages</span></a></li>

                                                <li class="nav-item"> -->
                                    <li class="nav-item d-flex">
                                        <a style="padding: 0" class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-regular fa-bell fs-6 fw-semibold"></i>
                                            <span class="badge rounded-pill bg-danger">
                                                1
                                                <span class="visually-hidden">unread messages</span></a>
                                        <ul class="sub-menu collapse">
                                            <li class="nav-item-customize">
                                                <span>12:00<strong>Wednesday</strong></span>
                                                <a href="#" class="text-success">Musculoskeletal</a>
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
                <div class="nav-inner">

                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img src="/assets/img/favicon.png" alt="Logo" style="height: 40px; width: 40px">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active dd-menu collapsed" href="/home" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Hospital</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Department</a>
                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="#">Musculoskeletal</a></li>
                                        <li class="nav-item"><a href="#">Neurology</a></li>
                                        <li class="nav-item"><a href="#">Gastroenterology</a></li>
                                        <li class="nav-item"><a href="#">Heart</a></li>
                                        <li class="nav-item"><a href="#">Otorhinolaryngology</a></li>
                                        <li class="nav-item"><a href="#">Dermatology</a></li>
                                    </ul>

                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Doctors</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/contactus" aria-label="Toggle navigation">Contact</a>
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
