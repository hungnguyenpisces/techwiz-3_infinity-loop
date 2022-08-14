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
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3>Contact</h3>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">We’re connected all time to help our patients
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="form-title">
                                <h2>Feel free to contact us for any query.</h2>
                            </div>
                            <form class="form" method="post"
                                  action="https://demo.graygrids.com/themes/medigrids/assets/mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Your Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Your Subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Your Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Your Phone" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-head">
                            <h2 class="main-title">Contact Information</h2>
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <h3>Medical Address</h3>
                                <ul>
                                    <li>23 New Design Str, Lorem Upsum 10 Hudson Yards, USA</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="lni lni-timer"></i>
                                </div>
                                <h3>Opening hours</h3>
                                <ul>
                                    <li>Mon - Tue 08:30 - 18:30</li>
                                    <li>Wed- Thu 07:00 - 14:30</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <h3>Email Support</h3>
                                <ul>
                                    <li><a
                                            href="https://demo.graygrids.com/cdn-cgi/l/email-protection#c7aea9a1a887bea8b2b5b0a2a5b4aeb3a2e9a4a8aa"><span
                                                class="__cf_email__"
                                                data-cfemail="9cfff3f2e8fdffe8dcf1f9f8f5fbeef5f8efb2fff3f1">[email&#160;protected]</span></a>
                                    </li>
                                    <li><a
                                            href="https://demo.graygrids.com/cdn-cgi/l/email-protection#abc2c5cdc4ebd2c4ded9dccec9d8c2dfce85c8c4c6"><span
                                                class="__cf_email__"
                                                data-cfemail="89fafcf9f9e6fbfdc9e4ecede0eefbe0edfaa7eae6e4">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-info contact-social">
                                <h3>Social contact</h3>
                                <div class="info-icon">
                                    <i class="lni lni-mobile"></i>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="lni lni-facebook-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                                    <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="map-section">
        <div class="map-container">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                                 src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                                 scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.com">123movies old
                        site</a>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>


    {{-----end content-----}}
@endsection

@section('extraJs')
    <!-- extraJs -->



    <!-- end extraJs -->
@endsection
