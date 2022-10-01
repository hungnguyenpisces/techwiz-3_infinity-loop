@extends('web.layouts._master')
@section('title')
    Hospital
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
    <br>
    <div class="container">
        <section class="doctors section">
            <div class="container">
            <div class="section-title">
                            <h3>Hospital</h3>
                            <div class="newsletter-form input">
                                <h2 class="wow fadeInUp">Our hospitals</h2>
            <form method="get" action="{{ route('hospital') }}" class="form-inline mr-auto">
                <!-- input name = query -->
                <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">
            </form>
            </div>
        </div>
                <div class="row d-flex justify-content-between">
                    @if ($hospitals->count() > 0)
                    @foreach($hospitals as $hospital)
                        <div class="card mb-5" style="width: 22rem; overflow: hidden">
                        <img class="card-img-top" src="assets/images/doctors/doctor1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$hospital->name}}</h5>
                        </div>
                        <div class="card-body text-center">
                            <a href="{{route('hospital-detail', $hospital->id)}}" class="card-link btn btn-success">view detail</a>
                        </div>
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
                        <p class="text-center" style="font-size: 30px">No result found for query <strong>{{$search}}</strong></p>
                    @endif
                </div>
            </div>
        </section>
    
    </div>
@endsection
