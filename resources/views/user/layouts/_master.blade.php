<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

    <title>@yield('title') | IL-Team</title>

    @include('user.layouts.style')
    @yield('extraCss')
    @yield('headExtraJs')


</head>

<body>
@include('user.layouts.header')

    <div class="d-flex">
        @include('user.layouts.sidebar')
    </div>

    @include('user.layouts.footer')
    @include('user.layouts.script')
    @yield('extraJs')

<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('div.sidebar'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";

        }
    });
    onload = function() {
        const url = (window.location.href);
        const index = url.search('user');
        const _id = url.slice(index);
        const li = document.getElementById(_id);
        li.style.backgroundColor = '#88c250';
        li.style.color = "white";
    }
</script>

</body>

</html>
