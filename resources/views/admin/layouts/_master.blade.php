<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{!! url('assets/img/favicon.png') !!}" />

    <title>@yield('title') | IL-Team</title>

    @include('admin.layouts.style')

    @yield('extraCss')

    @yield('headExtraJs')

</head>

<body class="theme-green">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-cyan">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <div class="overlay"></div>

    <ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
        <li class="mfbc_wrap">
            <a href="javascript:void(0);" class="mfbcb-main g-bg-cyan">
                <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
                <i class="mfbcm-icon-active zmdi zmdi-close"></i>
            </a>
            <ul class="mfbc_list">
                <li><a href="#" data-mfb-label="Doctor Schedule" class="mfb-child bg-blue"><i class="zmdi zmdi-calendar mfbc_icon"></i></a></li>
                <li><a href="#" data-mfb-label="Patients List" class="mfb-child bg-orange"><i class="zmdi zmdi-account-o mfbc_icon"></i></a></li>
                <li><a href="#" data-mfb-label="Payments" class="mfb-child bg-purple"><i class="zmdi zmdi-balance-wallet mfbc_icon"></i></a></li>
            </ul>
        </li>
    </ul>


    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')


    @yield('content')


    @include('admin.layouts.footer')

    @include('admin.layouts.script')

    <!-- master js -->
    <script src="{!! url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <!-- end master js -->

    @yield('extraJs')

    @yield('footerJs')
    
</body>

</html>