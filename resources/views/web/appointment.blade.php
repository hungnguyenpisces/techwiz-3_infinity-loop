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
                    <h1 class="page-title">Appointment</h1>
                </div>
                <ul class="breadcrumb-nav">
                    <li><a href="/">Home</a></li>
                    <li>appointment</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="appointment page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <form action="{{route('appointment.store')}}" method="post">
                    @csrf
                    <div class="appointment-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="appointment-title">
                                    <h2>Book An Appointment</h2>
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
                                    <input type="text" name="first_name" id="first_name" placeholder="First name" value="{{Auth::user()->first_name}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 p-0">
                                <div class="appointment-input">
                                    <label for="last_name"><i class="lni lni-user"></i></label>
                                    <input type="text" name="last_name" id="last_name" placeholder="First name" value="{{Auth::user()->last_name}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 p-0">
                                <div class="appointment-input">
                                    <label for="email"><i class="lni lni-envelope"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email" value="{{Auth::user()->email}}">
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
                                    <label for="hospital"><i class="lni lni-sthethoscope"></i></label>
                                    <select name="hospital_id" id="hospital">
                                        <option value="none" selected disabled>Hospital</option>
                                        <!-- $hospital -->
                                        @foreach($hospitals as $hospitals)
                                        <option value="{{$hospitals->id}}">{{$hospitals->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 p-0">
                                <div class="appointment-input">
                                    <label for="department"><i class="lni lni-notepad"></i></label>
                                    <select name="department_id" id="department">
                                        <option value="none" selected disabled>Department</option>
                                        <!-- $department -->
                                        @foreach($departments as $departments)
                                        <option value="{{$departments->id}}">{{$departments->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 p-0">
                                <div class="appointment-input">
                                    <label for="date"><i class="lni lni-user"></i></label>
                                    <input type="date" name="date" id="date">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 p-0">
                                <div class="appointment-input">
                                    <label for="time"><i class="lni lni-user"></i></label>
                                    <input type="time" name="time" id="time">
                                </div>
                            </div>
                            <div class="col-12 p-0">
                                <div class="appointment-input">
                                    <textarea name="self_check_symptom" placeholder="Write Your Message Here....."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 p-0">
                                <div class="appointment-btn button">
                                    <button type="submit" class="btn">Get Appointment</button>
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
