@extends('user.layouts._master')

@section('extraCss')

@endsection

@section('content')


<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{Auth::user()->first_name}}</h5>
                        <p class="text-muted mb-1">Full Stack Developer</p>
                        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                        <div class="d-flex justify-content-center mb-2">
                            <div class="button wow fadeInLeft" data-wow-delay=".7s">
                                <a href="user-update" class="btn">Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Height</p>
                                <p class="mb-0">{{$healthIndex->height}} cm</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Weight</p>
                                <p class="mb-0">{{$healthIndex->weight}} kg</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Blood pressure</p>
                                <p class="mb-0">{{$healthIndex->blood_pressure}}</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Heartbeat</p>
                                <p class="mb-0">{{$healthIndex->heart_rate}}</p>
                            </li>

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
            </div>
        </div>
    </div>
</section>
@endsection