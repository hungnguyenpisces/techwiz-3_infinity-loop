@extends('web.layouts._master')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hopital search</title>
    <link rel="icon" type="image/x-icon" href="{!! url('assets/img/favicon.png') !!}" />

    @include('web.layouts.style')

</head>
@section('content')
    <br><br><br>
    <div class="container">
        <section class="doctors section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3>Hospital</h3>
                            <div class="newsletter-form input">
                                <h2 class="wow fadeInUp">Search Hospital</h2>
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input style="height: 50px; width: 70%" name="EMAIL" placeholder="     What are you looking for?" type="email">
                                    <label class="button">
                                        <button class="btn">Search<span class="dir-part"></span></button>
                                    </label>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
{{--                    @foreach()--}}
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <img src="assets/images/doctors/detail-img.jpg" alt="#">
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5>Hospital address</h5>
                                <h3><a href="doctor-details.html">hospital name</a></h3>
                            </div>
                        </div>

                    </div>
{{--                    @endforeach--}}
                </div>
            </div>
        </section>
    </div>
@endsection
