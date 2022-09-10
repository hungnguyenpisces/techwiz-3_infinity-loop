@extends('web.layouts._master')



    @include('web.layouts.style')

</head>
@section('content')
    <br>
    <div class="container">
        <section class="doctors section">
            <div class="container">
            <div class="section-title">
                            <h3>Hospital</h3>
                            <div class="newsletter-form input">
                                <h2 class="wow fadeInUp">Search doctor</h2>
            <form method="get" action="{{ route('doctor-searchRs') }}" class="form-inline mr-auto">
              <input type="text" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}" class="form-control col-sm-8 h-10"  placeholder="Search for your doctor" aria-label="Search">
              <!-- <button class="btn aqua-gradient btn-rounded btn-sm my-0 waves-effect waves-light" type="submit">Search</button> -->
            </form>
</div></div>
                <div class="portfolio-section section">
        
                    <div class="row">
                        <div class="col-12">
                            <div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s">
                                <button class="portfolio-btn active" data-filter="*">Show All</button>
                                <button class="portfolio-btn" data-filter=".cardiology">Cardiology</button>
                                <button class="portfolio-btn" data-filter=".diabetes">Diabetes</button>
                                <button class="portfolio-btn" data-filter=".pediatric">Pediatric</button>
                                <button class="portfolio-btn" data-filter=".neurosurgery">Neurosurgery</button>
                            </div>
                        </div>
                    </div>
</div>
                    @if ($searchResults-> isEmpty())
                    <h3 class="text-center">Sorry, no search result found!</b></h3>

                    <div class="text-center">
                         <a href="/doctor-search" class="btn btn-success mt-3">Back to list</a>
                    </div>
                    @foreach($searchResults as $doctor) 
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
                                <h5>{{$doctor->position}}</h5>
                                <h3><a href="/doctor-detail">{{$doctor->first_name}} {{$doctor->last_name}}</a></h3>
                            </div>
                        </div>

                        </div>
                    @endforeach
                    @else
                    @foreach($searchResults as $doctor) 
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
                                <h5>{{$doctor->position}}</h5>
                                <h3><a href="/doctor-detail">{{$doctor->first_name}} {{$doctor->last_name}}</a></h3>
                            </div>
                        </div>

                        </div>
                    @endforeach
                    @endif
                   

                </div>
            </div>
        </section>
    </div>
@endsection
