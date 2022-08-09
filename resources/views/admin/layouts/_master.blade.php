<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

    <title>@yield('title') | IL-Team</title>

    @include('admin.layouts.style')
    @yield('headExtraJs')

</head>

<body>
    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    @yield('content')

    @include('admin.layouts.footer')

    @include('admin.layouts.script')
    @yield('extraJs')
</body>

</html>