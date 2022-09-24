@extends('admin.layouts._master')

@section('title')
    Custom title if need
@endsection

@section('extraCss')
    <!-- extra css -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
    <link rel="stylesheet" href="/assets/plugins/waitme/waitMe.css" />
    <link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css" />


@endsection


@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Book Appointment</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="card">
                        <div class="header">
                            <h2>Appointment Information <small>Description text here...</small> </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="#" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="#" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <form method="POST" action="{{route('admin.createAppointment')}}">
                            @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="username" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="first_name" type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="date_of_birth" class="datepicker form-control" placeholder="Date of Birth">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="form-group drop-custum">
                                            <select name="gender" class="form-control show-tick">
                                                <option value="">-- Gender --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="form-group drop-custum">
                                            <select name="department_id" class="form-control show-tick">
                                                <option value="">-- Service --</option>
                                                <!-- foreach departments as dp -->
                                                @foreach($departments as $dp)
                                                    <option value="{{ $dp->id }}">{{ $dp->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="date_time" type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="blood_group" class="form-control" placeholder="Enter Your Blood group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="address" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="self_check_symptom" rows="4" class="form-control no-resize" placeholder="Type in patient's symptom"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                        <button type="submit" class="btn btn-raised">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('extraJs')
    <!-- extraJs -->
    <script src="/assets/plugins/autosize/autosize.js"></script>
    <script src="/assets/plugins/momentjs/moment.js"></script>
    <script src="/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="/assets/js/pages/forms/basic-form-elements.js"></script>

    <!-- end extraJs -->
@endsection
