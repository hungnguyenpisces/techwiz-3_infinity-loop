<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="{!! url('assets/img/favicon.png') !!}" />

    @include('web.layouts.style')

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Social registration form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 fw-light mb-3">Create an Account</div>
                                    <div class="small text-muted mb-2">Sign in using...</div>
                                    <!-- Social registration links-->
                                    <a class="btn btn-icon btn-facebook mx-1" href="auth-register-social.html#!"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-github mx-1" href="auth-register-social.html#!"><i class="fab fa-github fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-google mx-1" href="auth-register-social.html#!"><i class="fab fa-google fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-twitter mx-1" href="auth-register-social.html#!"><i class="fab fa-twitter fa-fw fa-sm text-white"></i></a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <div class="text-center small text-muted mb-4">...or enter your information below.</div>
                                    <!-- Login form-->
                                    <form method="post" action="{{ route('register.perform') }}">
                                        @csrf
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
                                        <!-- Form Group (form submission)-->
                                        <div class="d-flex align-items-center justify-content-center">
                                            <button class="btn btn-primary" type="submit">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">
                                        Have an account?
                                        <a href="{{ route('login.show') }}">Sign in!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    @include('web.layouts.script')
</body>

</html>