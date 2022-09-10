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
                                <h2 class="wow fadeInUp">Search hospital</h2>
            <form method="get" action="{{ route('hospital-searchRs') }}" class="form-inline mr-auto">
              <input type="text" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}" class="form-control col-sm-8 h-10"  placeholder="Search for your hospital" aria-label="Search">
              <!-- <button class="btn aqua-gradient btn-rounded btn-sm my-0 waves-effect waves-light" type="submit">Search</button> -->
            </form>
</div></div>
                <div class="row">
                  
                    @if ($searchResults-> isEmpty())
                    <h3 class="text-center">Sorry, no search result found!</b></h3>
                    <div class="text-center">
                         <a href="/hospital-search" class="btn btn-success mt-3">Back to list</a>
                    </div>
                    @foreach($searchResults as $hpt) 
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <img src="assets/images/doctors/detail-img.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5>{{$hpt->name}}</h5>
                                <h3><a href="/doctor-detail">{{$hpt->location}}</a></h3>
                            </div>
                        </div>

                        </div>
                    @endforeach
                    @else
                    @foreach($searchResults as $hpt) 
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <img src="assets/images/doctors/detail-img.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5>{{$hpt->name}}</h5>
                                <h3><a href="/hospital-detail"></a>{{$hpt->location}}</h3>
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
