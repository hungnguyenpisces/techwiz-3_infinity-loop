@extends('web.layouts._master')

@section('title')
    Hospital details
@endsection

@section('extraCss')
    <!-- extra css -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- end extra css -->
@endsection

@section('content')
    {{-----content-----}}
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">About Us</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="about-us section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="content-left wow fadeInLeft" data-wow-delay=".3s">
                        <img src="assets/images/about/about.png" alt="#">
                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox video"><i class="lni lni-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">

                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">
                        <span class="sub-heading">About</span>
                        <h2>Thousands of specialities for any
                            type diagnostic.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi aliquip ex ea commodo consequat.</p>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <ul class="list">
                                    <li><i class="lni lni-checkbox"></i>Conducts eye health checkups</li>
                                    <li><i class="lni lni-checkbox"></i>Best lasik treatment</li>
                                    <li><i class="lni lni-checkbox"></i>Treats minor illnesses</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-12">
                                <ul class="list">
                                    <li><i class="lni lni-checkbox"></i>Special eye exam</li>
                                    <li><i class="lni lni-checkbox"></i>Contact lens service</li>
                                    <li><i class="lni lni-checkbox"></i>Special Retina exam</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-apartment"></i>
                        <h3 class="counter"><span id="secondo1" class="countup" cup-end="1250">1250</span></h3>
                        <p>Hospital Rooms</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                        <i class="lni lni-sthethoscope"></i>
                        <h3 class="counter"><span id="secondo2" class="countup" cup-end="350">350</span></h3>
                        <p>Specialist Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-emoji-smile"></i>
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="2500">2500</span></h3>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-certificate"></i>
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="35">35</span></h3>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="doctors section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Doctors</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Outstanding Team Is Active To Help You!</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor1.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Cardiologist</h5>
                            <h3><a href="doctor-details.html">Dr.Felica Queen</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".4s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor2.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Neurologist</h5>
                            <h3><a href="doctor-details.html">Dr.Alice Williams</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".6s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor3.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Physician Assistant</h5>
                            <h3><a href="#">Dr.Paul Flavius</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".8s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor4.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Physician Assistant</h5>
                            <h3><a href="doctor-details.html">Dr.Michael Bean</a></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <h3>testimonials</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">What People Say</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi1.jpg" alt="#">
                            <h4 class="name">
                                Jane Anderson
                                <span class="deg">Cancer client</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi2.jpg" alt="#">
                            <h4 class="name">
                                Paul Flavius
                                <span class="deg">Heather</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi3.jpg" alt="#">
                            <h4 class="name">
                                Harry Russel
                                <span class="deg">Surgery client</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi4.jpg" alt="#">
                            <h4 class="name">
                                Alice Williams
                                <span class="deg">Mother</span>
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="client-logo-section">
        <div class="container">
            <div class="client-logo-wrapper">
                <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="client-logo">
                        <img src="assets/images/clients/client-logo-1.png" alt="#">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client-logo-2.png" alt="#">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client-logo-3.png" alt="#">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client-logo-4.png" alt="#">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client-logo-2.png" alt="#">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client-logo-3.png" alt="#">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client-logo-4.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-----end content-----}}
@endsection

@section('extraJs')
    <!-- extraJs -->
    <script type="text/javascript">
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });
    </script>

    <!-- end extraJs -->
@endsection
