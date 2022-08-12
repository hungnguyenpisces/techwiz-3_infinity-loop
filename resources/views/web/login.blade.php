@extends('web.layouts._master')

@section('title')
@endsection

@section('extraCss')
<!-- extra css -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">



<!-- end extra css -->
@endsection

@section('content')
{{-----content-----}}
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Login</h1>
                </div>
                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>


<section class="login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="form-head">
                    <h4 class="title">Login To Your Account</h4>
                    <form action="{{route('login.perform')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input name="username" type="text" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <div class="check-and-pass">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                        <label class="form-check-label">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <a href="javascript:void(0)" class="lost-pass">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn">Login Now</button>
                        </div>
                        <div class="alt-option">
                            <span>Or</span>
                        </div>
                        <div class="socila-login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="facebook">Login
                                                With
                                                Facebook <i class="fa-brands fa-square-facebook"></i> </a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="google">Login With Google
                                                Plus <i class="fa-brands fa-square-google-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="instagram">Login With
                                                Instagram <i class="fa-brands fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="linkedin">Login
                                                With Linkedin <i class="fa-brands fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="outer-link">Don't have an account? <a href="register.blade.php">Register here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


{{-----end content-----}}
@endsection

@section('extraJs')
<!-- extraJs -->



<!-- end extraJs -->
@endsection