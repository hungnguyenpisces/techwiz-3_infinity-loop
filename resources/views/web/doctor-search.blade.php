@extends('web.layouts._master')



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
                            <h3>Doctor</h3>
                            <div class="newsletter-form input">
                                <h2 class="wow fadeInUp">Search Doctor</h2>
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input style="height: 50px; width: 70%" name="searcher" placeholder="     What are you looking for?" type="text">
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
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5>Doctor's position</h5>
                                <h3><a href="doctor-details.html">Doctor Name</a></h3>
                            </div>
                        </div>

                    </div>
{{--                    @endforeach--}}
                </div>
            </div>
        </section>
    </div>
@endsection
