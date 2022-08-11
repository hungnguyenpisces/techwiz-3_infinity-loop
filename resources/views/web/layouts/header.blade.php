{{--@php(--}}
{{--    $user = \Illuminate\Support\Facades\Auth::user()--}}
{{--)--}}
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">

                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img src="" width="50px" height="80px" alt="Logo">
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
                                    <a class="page-scroll active dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-1"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Home</a>
                                    <ul class="sub-menu collapse" id="submenu-1-1">
                                        <li class="nav-item active"><a href="#">Home Default</a></li>
                                        <li class="nav-item"><a href="#">Home Version 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-2"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Pages</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="#">About Us</a></li>
                                        <li class="nav-item"><a href="#">Appointment</a></li>
                                        <li class="nav-item"><a href="#">Time Table</a></li>
                                        <li class="nav-item"><a href="#">Testimonials</a></li>
                                        <li class="nav-item"><a href="#">Project Details</a>
                                        </li>
                                        <li class="nav-item"><a href="#">Our Pricing</a></li>

                                        <li class="nav-item"><a href="#">Faq</a></li>
                                        <li class="nav-item"><a href="#">Mail Success</a></li>
                                        <li class="nav-item"><a href="#">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Services</a>
                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="#">Services</a></li>
                                        <li class="nav-item"><a href="#">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Doctors</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="#">Doctors</a></li>
                                        <li class="nav-item"><a href="#">Doctor Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-5"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Blog</a>
                                    <ul class="sub-menu collapse" id="submenu-1-5">
                                        <li class="nav-item"><a href="#">Blog Grid Sidebar</a>
                                        </li>
                                        <li class="nav-item"><a href="#">Blog Single</a></li>
                                        <li class="nav-item"><a href="#">Blog Single
                                                Sibebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" aria-label="Toggle navigation">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="button add-list-button">
                                <a href="#" class="btn">Book Appointment</a>
                        </div>
                        <div class="button add-list-button">

{{--                            <p>{{ $user->username }}--}}
                                <a href="#" ><i class="fa-solid fa-user"></i></a></p>
                                <a href="#" ><i class="fa-solid fa-bell"></i></a></p>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
