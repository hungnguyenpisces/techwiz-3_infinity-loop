@extends('web.layouts._master')

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
@section('content')
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
<form action="registration.html#!" method="post">
<div class="socila-login">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<ul>
<li><a href="javascript:void(0)" class="facebook"><i class="lni lni-facebook-filled"></i>Import From
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
</div>
<div class="form-group">
<input name="password" type="text" placeholder="Name">
</div>
<div class="form-group">
<input name="email" type="email" placeholder="Email">
</div>
<div class="form-group">
<input name="password" type="password" placeholder="Password">
</div>
<div class="form-group">
<input name="password" type="password" placeholder="Confirm Password">
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
<p class="outer-link">Already have an account? <a href="login.html"> Login Now</a>
</p>
</form>
</div>
</div>
</div>
</div>
</section>
</html>
@endsection