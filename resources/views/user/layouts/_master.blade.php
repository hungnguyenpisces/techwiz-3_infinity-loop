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
    <div class="">
        <div class="row">
            <div class="col-2">
                @include('user.layouts.sidebar')
            </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
    @include('user.layouts.script')
    @yield('extraJs')

</body>

</html>
