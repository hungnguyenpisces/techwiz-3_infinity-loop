@extends('web.layouts._master')



    @include('web.layouts.style')

</head>
@section('content')
    <br>
    <div class="container">
        <section class="doctors">
            <div class="container">
            <div class="section-title">
                            <h3>Doctors</h3>
                            <div class="newsletter-form input">
                                <h2 class="wow fadeInUp">Search doctors</h2>
            <form method="get" action="{{ route('doctor-searchRs') }}" class="form-inline mr-auto">
              <input type="text" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}" class="form-control col-sm-8 h-10"  placeholder="Search for your doctor" aria-label="Search">
              <!-- <button class="btn aqua-gradient btn-rounded btn-sm my-0 waves-effect waves-light" type="submit">Search</button> -->
              <label for="">Search by hospital</label>
                                        <select name="hospital_id" class="form-control form-select show-tick">
                                          <option value="">Hospital</option>
                                          @foreach($lsHospital as $hospital)
                                            @if($hospital->id==$hospital_filter)
                                          <option value="{{$hospital->id}}" selected>{{$hospital->name}}</option>
                                          @else
                                          <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                          @endif

                                          @endforeach
                                        </select>
                                        <label for="">Search by department</label>
                                        <select name="department_id" class="form-control form-select show-tick">
                                          <option value="">Department</option>
                                          @foreach($lsDepartment as $department)
                                          @if($department->id==$department_filter)
                                          <option value="{{$department->id}}" selected>{{$department->name}}</option>
                                          @else
                                          <option value="{{$department->id}}">{{$department->name}}</option>
                                          @endif
                                          @endforeach
                                        </select>  
                                        <button class="btn" type="submit">Filter</button>
            </form>
        </div></div>

                <div class="row">
                  
                    @if ($searchResults-> isEmpty())
                    <h3 class="text-center">Sorry, no search result found!</b></h3>
                    <div class="text-center">
                         <a href="/doctor-search" class="btn btn-success mt-3">Back to list</a>
                    </div>
                    @foreach($searchResults as $dt) 
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <img src="assets/images/doctors/detail-img.jpg" alt="#">
                            </div>
                            <div class="content">
                            <h5>{{$dt->position}}</h5>
                                <h3><a href="/doctor-detail"></a>{{$dt->first_name}} {{$dt->last_name}}</h3>
                            </div>
                        </div>

                        </div>
                    @endforeach
                    @else
                    @foreach($searchResults as $dt) 
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <img src="assets/images/doctors/detail-img.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5>{{$dt->position}}</h5>
                                <h3><a href="/doctor-detail"></a>{{$dt->first_name}} {{$dt->last_name}}</h3>
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
