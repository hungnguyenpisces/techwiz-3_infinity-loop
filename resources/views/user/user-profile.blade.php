@extends('user.layouts._master')

@section('extraCss')

@endsection

@section('content')


    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100 form-head">
            <h3 class="container justify-content-center">Personal Health Information</h3>
            <form action="">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" />
                            <label class="form-label" for="firstName" placeholder="First Name">First Name</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="lastName" class="form-control form-control-lg" />
                            <label class="form-label" for="lastName" placeholder="Last Name">Last Name</label>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline datepicker w-100">
                            <input type="date" class="form-control form-control-lg" id="birthdayDate" />
                            <label for="birthdayDate" class="form-label">Birthday</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">Gender: </h6>

                        <div class="form-check form-check-inline">
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
                            <input type="email" id="emailAddress" class="form-control form-control-lg" />
                            <label class="form-label" for="emailAddress">Email</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                            <label class="form-label" for="phoneNumber" placeholder="Phone Number">Phone Number</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="" class="form-control form-control-lg" />
                            <label class="form-label" placeholder="Height" >Height</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text"  class="form-control form-control-lg" />
                            <label class="form-label" placeholder="Weight">Weight</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="" class="form-control form-control-lg" />
                            <label class="form-label" placeholder="Blood pressure" >Blood pressure</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text"  class="form-control form-control-lg" />
                            <label class="form-label" placeholder="Heartbeat">Heartbeat</label>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" class="form-control" id="" placeholder="Avatar">
                </div>
                <div class="form-group">
                    <label for="">History of drug allergy</label>
                    <textarea class="form-control" id="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Medical history</label>
                    <textarea class="form-control" id="" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

@endsection