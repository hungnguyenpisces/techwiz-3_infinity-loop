<div class="sidebar close">
    <header>
        <div class="image-text">
            <!-- <span class="image">
                <i class="fa-solid fa-home icon2"></i>
            </span> -->
            <!-- <div class="text logo-text">
                <a href="/">
                    <span class="name">BACK TO HOME</span>
                </a>
            </div> -->

        </div>
        <span class="toggle mt-5"> <i style="font-size: 14"
                                      class="fa-solid fa-xl fa-arrow-right-from-bracket"></i></span>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <div class="search-box">

            </div>

            <ul class="menu-links">

                <li class="nav-link" id="home">
                    <a href="/">
                        <i class="fa-solid fa-home icon2"></i>
                        <span class="text nav-text">BACK TO HOME</span>
                    </a>
                </li>

                <li class="nav-link" id="user">
                    <a href="/user">
                        <i class="fa-solid fa-user icon2"></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="/user-health">
                        <i class="fa-solid fa-file-pen icon2"></i>
                        <span class="text nav-text">Health</span>
                    </a>
                </li>

                <li class="nav-link" id="user-bmi">
                    <a href="/user-bmi">
                        <i class="fa-solid fa-xl fa-person icon2"></i>
                        <span class="text nav-text">Your BMI</span>
                    </a>
                </li>

                <li class="nav-link" id="user-chart">
                    <a href="/user-appointment">
                        <i class="fa-solid fa-book-medical icon2"></i>
                        <span class="text nav-text">Appointments</span>
                    </a>
                </li>
                <li class="nav-link" id="user-history">
                    <a href="/user-history">
                        <i class="fa-regular fa-calendar-check icon2"></i>
                        <span class="text nav-text">History</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>

<section class="home">
    @yield('content')
</section>
