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
                        <h1 class="page-title">Registration</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="#">Home</a></li>
                        <li>Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">
                        <h4 class="title">Registration</h4>
                        <form action="register" method="post">
                            @csrf
                            <div class="socila-login">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="facebook"><i
                                                        class="lni lni-facebook-filled"></i>Import From
                                                    Facebook</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="google"><i
                                                        class="lni lni-google"></i>Import From Google
                                                    Plus</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="instagram"><i
                                                        class="lni lni-instagram"></i>Import From
                                                    Instagram</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="linkedin"><i
                                                        class="lni lni-linkedin-original"></i>Import From Linkedin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="alt-option">
                                <span>Or</span>
                            </div>
                            <div class="form-group">
                                <input name="first_name" type="text" placeholder="First Name" value="{{old('first_name')}}">
                            </div>
                            <div class="form-group">
                                <input name="last_name" type="text" placeholder="Last Name" value="{{old('last_name')}}">
                            </div>
                            <div class="form-group">
                                <input name="username" type="text" placeholder="User Name" value="{{old('username')}}">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Password" value="{{old('password')}}">
                            </div>
                            <div class="form-group">
                                <input name="confirm-password" type="password" placeholder="Confirm Password" value="{{old('confirm-password')}}">
                            </div>
                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto"
                                                   id="exampleCheck1">
                                            <label class="form-check-label">Agree to our <a href="javascript:void(0)">Terms
                                                    and
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn" >Registration</button>
                            </div>
                            <p class="outer-link">Already have an account? <a href=""> Login Now</a>
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
