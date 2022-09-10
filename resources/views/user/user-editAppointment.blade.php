@extends('user.layouts._master')

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
                        <h1 class="page-title">Edit Appointment</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <p>{{$err}}</p>
            @endforeach
        </div>
    @endif


    <section class="appointment page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <form method="post" action="{{route('appointment.update', $appointment->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="appointment-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="appointment-title">
                                        <h2>Edit Book An Appointment</h2>
                                        <p>Please feel welcome to contact our friendly reception staff with any general or
                                            medical
                                            enquiry. Our doctors will receive or return any urgent calls.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="first_name"><i class="lni lni-user"></i></label>
                                        <input type="text" name="first_name" id="first_name" placeholder="First name" value="{{Auth::user()->first_name}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="last_name"><i class="lni lni-user"></i></label>
                                        <input type="text" name="last_name" id="last_name" placeholder="Last name" value="{{Auth::user()->last_name}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="email"><i class="lni lni-envelope"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email" value="{{Auth::user()->email}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="number"><i class="lni lni-phone-set"></i></label>
                                        <input type="text" name="number" id="number" placeholder="Phone Number" value="{{Auth::user()->phone}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="">Hospital</label>
                                        <select name="hospital_id" class="form-control form-select show-tick" required>
                                            @foreach($hospitals as $hospital)
                                                @if($hospital->id == $appointment->hospital_id)
                                                    <option value="{{$appointment->hospital_id}}" selected>{{$appointment->hospital_name}}</option>
                                                @else
                                                    <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="">Department</label>
                                        <select name="department_id" class="form-control form-select show-tick" required>
                                            @foreach($departments as $department)
                                                @if($department->id == $appointment->department_id)
                                                    <option value="{{$appointment->department_id}}" selected>{{$appointment->department_name}}</option>
                                                @else
                                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="date"></label>
                                        <input type="date" name="date" id="date" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="time"></label>
                                        <input type="time" name="time" id="time" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="date">{{$appointment->date}}</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="time">{{$appointment->time}}</label>

                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <div class="appointment-input">
                                        <textarea name="self_check_symptom" placeholder="{{$appointment->self_check_symptom}}" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-btn button">
                                        <button type="submit" class="btn" value="Save">Edit</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    @foreach(['danger', 'success', 'warning', 'info'] as $type)
                                        @if(Session::has($type))
                                            <p class="alert alert-{{$type}}">
                                                {{Session::get($type)}}
                                            </p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    {{-----end content-----}}
@endsection

@section('extraJs')
    <!-- extraJs -->


    <!-- end extraJs -->
@endsection
