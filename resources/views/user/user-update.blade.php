@extends('user.layouts._master')

@section('extraCss')

@endsection

@section('content')


    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100 form-head">
            <h3 class="container justify-content-center">Personal Information</h3>
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" />
                            <label class="form-label">First Name</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" />
                            <label class="form-label">Last Name</label>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline datepicker w-100">
                            <input type="date" class="form-control form-control-lg" id="date_of_birth" name="date_of_birth" />
                            <label  class="form-label">Birthday</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">Gender: </h6>
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                   value="option1" checked />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                   value="option2" />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                   value="option3" />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            <label class="form-label" >Email</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="tel" id="phone" name="phone" class="form-control form-control-lg" />
                            <label class="form-label">Phone Number</label>
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </section>

@endsection

