<div class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <i class="fa-solid fa-home icon2"></i>
            </span>
            <div class="text logo-text">
                <span class="name">BACK TO HOME</span>
            </div>

        </div>
        <span class="toggle mt-5"> <i style="font-size: 14" class="fa-solid fa-xl fa-arrow-right-from-bracket"></i></span>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <div class="search-box">

            </div>

            <ul class="menu-links">
                <li class="nav-link" id="user">
                    <a href="/user">
                        <i class="fa-solid fa-user icon2"></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>

                <li class="nav-link" id="user-bmi">
                    <a href="/user-bmi">
                        <i class="fa-solid fa-xl fa-person icon2"></i>
                        <span class="text nav-text">Your BMI</span>
                    </a>
                </li>

                <li class="nav-link" id="user-chart">
                    <a href="/user-chart">
                        <i class="fa-solid fa-chart-line icon2"></i>
                        <span class="text nav-text">Health charts</span>
                    </a>
                </li>

                <li class="nav-link" id="user-history">
                    <a href="/user-history">
                        <i class="fa-regular fa-calendar-check icon2"></i>
                        <span class="text nav-text">Appointments</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="fa-solid fa-bars icon2"></i>
                        <span class="text nav-text">Setting</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="bottom-content">
            <li class="mode">
                <span class="mode-text text">Dark mode</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>

        </div>
    </div>
</div>

<section class="home">
    @yield('content')
</section>