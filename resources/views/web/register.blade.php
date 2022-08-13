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
                    <li><a href="index.html">Home</a></li>
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
                    <form action="{{route('register.perform')}}" method="post">
                        @csrf
                        <div class="socila-login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="facebook"><i class="lni lni-facebook-original"></i>Import From
                                                Facebook</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i>Import From Google
                                                Plus</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="instagram"><i class="lni lni-instagram"></i>Import From
                                                Instagram</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="linkedin"><i class="lni lni-linkedin-original"></i>Import From Linkedin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="alt-option">
                            <span>Or</span>
                        </div>@csrf
                        <!-- Form Row-->
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <!-- Form Group (first name)-->
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="firstName">First name</label>
                                    <input class="form-control form-control-solid" name="first_name" type="text" placeholder="John" aria-label="First Name" aria-describedby="firstName" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Form Group (last name)-->
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="lastName">Last name</label>
                                    <input class="form-control form-control-solid" name="last_name" type="text" placeholder="Doe" aria-label="Last Name" aria-describedby="lastName" />
                                </div>
                            </div>
                        </div>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="text-gray-600 small" for="usernameInput">Username</label>
                            <input class="form-control form-control-solid" name="username" type="text" placeholder="username" aria-label="Username" aria-describedby="usernameInput" />
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="text-gray-600 small" for="emailInput">Email address</label>
                            <input class="form-control form-control-solid" name="email" type="text" placeholder="username@email.com" aria-label="Email Address" aria-describedby="emailInput" />
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <!-- Form Group (choose password)-->
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="passwordInput">Password</label>
                                    <input class="form-control form-control-solid" name="password" type="password" placeholder="" aria-label="Password" aria-describedby="passwordInput" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Form Group (confirm password)-->
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="confirmPasswordInput">Confirm Password</label>
                                    <input class="form-control form-control-solid" name="password_confirmation" type="password" placeholder="" aria-label="Confirm Password" aria-describedby="confirmPasswordInput" />
                                </div>
                            </div>
                        </div>
                        <div class="check-and-pass">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                        <label class="form-check-label">Agree to our <a href="javascript:void(0)">Terms and
                                                Conditions</a></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn">Registration</button>
                        </div>
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