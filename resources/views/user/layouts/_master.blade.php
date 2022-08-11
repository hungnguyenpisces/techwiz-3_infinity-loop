<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

    <title>@yield('title') | IL-Team</title>

    @include('user.layouts.style')
    @yield('headExtraJs')

</head>

<body>
@include('user.layouts.header')

<div class="d-flex bg-light" style="width: 100%; height: 100%; background-color: red ">
    @include('user.layouts.sidebar')
    <div style="width: 80%;height: 100%; float: right ">
        @yield('content')

    </div>
</div>
@include('user.layouts.script')
@yield('extraJs')
</body>

</html>
