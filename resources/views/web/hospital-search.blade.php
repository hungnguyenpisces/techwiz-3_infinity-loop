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
                    @endforeach
                    @else
                        <p class="text-center" style="font-size: 30px">No result found for query <strong>{{$search}}</strong></p>
                    @endif
                </div>
            </div>
        </section>
    
    </div>
@endsection
