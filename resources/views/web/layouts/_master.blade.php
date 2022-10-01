<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.png" />
    <title>@yield('title') | Infinity-Loop-Team</title>


    @include('web.layouts.style')

    @yield('extraCss')

    @yield('headExtraJs')

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @include('web.layouts.header')

    @yield('content')

    @include('web.layouts.footer')

    @include('web.layouts.script')

    @yield('extraJs')

    @yield('footerJs')

</body>

</html>
