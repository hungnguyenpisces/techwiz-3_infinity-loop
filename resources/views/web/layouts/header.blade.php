<header class="header navbar-area style2">
    <div class="top-bar">
        <div class="container">
            <div class="inner-topbar">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="top-contact">
                            <ul>
                                <li><i class="lni lni-envelope"></i><a href="#"><span class="__cf_email__"
                                                                                      data-cfemail="f39a9d959cb39e96979a94819a9780dd909c9e">Email</span></a>
                                </li>
                                <li><i class="lni lni-phone"></i> 0123456789</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="right-content">
                            <div class="login-button">
                                <ul>
                                    <li>
                                        @if(Auth::check())
                                            <a href="/user" style="width: 100px;"><i class="lni lni-user"></i>
                                                {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                                            </a>
                                            <a href="{{route('logout.perform')}}" title="sign out">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                            </a>
                                        @else
                                    </li>
                                    <a href="/login"><i class="lni lni-enter"></i> Login</a>
                                    <li>
                                        <a href="/register"><i class="lni lni-user"></i> Register</a>
                                    </li>
                                    @endif

                                    </a>
                                    </li>
                                </ul>
                            </div>
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
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active dd-menu collapsed" href="" data-bs-toggle="collapse"
                                       data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                       aria-expanded="false" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-2"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Hospital</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Department</a>
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
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Doctors</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/contactus" aria-label="Toggle navigation">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="button add-list-button">
                            <a href="{{route('appointment.index')}}" class="btn">Book Appointment</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
