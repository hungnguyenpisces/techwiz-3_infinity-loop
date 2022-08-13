<div class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image"style="margin-left: 14px;">
                <i class="fa-solid fa-user icon"></i>
            </span>

            <div class="text logo-text">
                <span class="name">Username</span>
                <span class="profession">Ho va ten</span>
            </div>
        </div>
        <span class="toggle"> <i class="fa-solid fa-arrow-right-from-bracket"></i></span>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <div class="search-box">

            </div>

            <ul class="menu-links">
                <li class="nav-link" id="user">
                    <a href="/user">
                        <i class="fa-solid fa-user icon"></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-link" id="user-bmi">
                    <a href="/user-bmi">
                        <i class="fa-solid fa-person icon"></i>
                        <span class="text nav-text">Your BMI</span>
                    </a>
                </li>

                <li class="nav-link" id="user-chart">
                    <a href="/user-chart">
                        <i class="fa-solid fa-chart-line icon"></i>
                        <span class="text nav-text">Health charts</span>
                    </a>
                </li>

                <li class="nav-link" id="user-history">
                    <a href="/user-history">
                        <i class="fa-regular fa-calendar-check icon"></i>
                        <span class="text nav-text">Appointments</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="fa-solid fa-bars icon"></i>
                        <span class="text nav-text">Setting</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class="fa-solid fa-moon icon sun"></i>
                    <i class="fa-solid fa-moon icon moon"></i>
                </div>
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