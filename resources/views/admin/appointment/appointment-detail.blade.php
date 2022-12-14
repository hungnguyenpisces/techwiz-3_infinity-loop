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
<!-- 
$appointment->user->last_name
$appointment->user->first_name

$appointment->user->date_of_birth
$appointment->user->gender
$appointment->user->blood_group

$appointment->user->email
$appointment->user->phone
$appointment->user->address

$appointment->department_name
$appointment->hospital_name
$appointment->self_check_symptom
$appointment->doctor_first_name
$appointment->date
$appointment->time
$appointment->status
-->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointment Detail</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h2>Appointment Information
                            @if($appointment->status == 'Pending')
                            <td><span class="badge bg-orange">{{ $appointment->status }}</span></td>
                            @elseif($appointment->status == 'Accepted')
                            <td><span class="badge bg-green">{{ $appointment->status }}</span></td>
                            @elseif($appointment->status == 'Done')
                            <td><span class="badge bg-blue">{{ $appointment->status }}</span></td>
                            @elseif($appointment->status == 'Cancelled')
                            <td><span class="badge bg-red">{{ $appointment->status }}</span></td>
                            @endif
                        </h2>
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
                    <div class="body">
                        <form id="appointmentForm" action="" method="">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">First name:</label>
                                            <input type="text" class="form-control" placeholder="First Name" value="{{$appointment->user->first_name}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Last name:</label>
                                            <input type="text" class="form-control" placeholder="Last Name" value="{{$appointment->user->last_name}}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">DOB:</label>
                                            <input type="text" class="datepicker form-control" placeholder="Date of Birth" value="{{$appointment->user->date_of_birth}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group drop-custum">
                                        <label for="">Gender:</label>
                                        <select class="form-control show-tick" disabled>
                                            <option value="">-- Gender --</option>
                                            <option value="" selected>{{$appointment->user->gender}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group drop-custum">
                                        <label for="">Blood group:</label>
                                        <select class="form-control show-tick" disabled>
                                            <option value="{{$appointment->user->blood_group}}" selected>{{$appointment->user->blood_group}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Email</label>
                                            <input type="text" class="datepicker form-control" placeholder="Email" value="{{$appointment->user->email}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="form-group drop-custum">
                                        <label for="">Phone:</label>
                                        <input type="text" class="datepicker form-control" placeholder="Phone" value="{{$appointment->user->phone}}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6 ">
                                    <div class="form-group drop-custum">
                                        <label for="">Address:</label>
                                        <input type="text" class="datepicker form-control" placeholder="Address" value="{{$appointment->user->address}}" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Appointment time: </label>
                                            @if($appointment->status == 'Pending')
                                            <input type="text" name="datetime" class="datepicker form-control" value="{{$appointment->date}} {{$appointment->time}}" required>
                                            @elseif($appointment->status != 'Pending')
                                            <input type="text" class="datetimepicker form-control" value="{{$appointment->date}} {{$appointment->time}}" disabled>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-4 ">
                                    <div class="form-group drop-custum">
                                        <label for="">Hospital:</label>
                                        <select class="form-control show-tick" disabled>
                                            <option value="" selected>{{$appointment->hospital_name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Department:</label>
                                            <select class="form-control show-tick" disabled>
                                                <option value="" selected>{{$appointment->department_name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group drop-custum">
                                        <label for="">Doctor:</label>
                                        @if($appointment->status == 'Pending' && !$appointment->doctor_first_name)
                                        <select name="doctor_id" class="form-control form-select show-tick" required>
                                            <option selected disabled value="">-- Select --</option>
                                            @foreach($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{$doctor->first_name}}</option>
                                            @endforeach
                                        </select>
                                        @endif
                                        @if($appointment->status == 'Pending' && $appointment->doctor_first_name)
                                        <select class="form-control show-tick" disabled>
                                            <option value="" selected>{{$appointment->doctor_first_name}}</option>
                                        </select>
                                        @endif
                                        @if($appointment->status != 'Pending' && $appointment->doctor_first_name)
                                        <select class="form-control show-tick" disabled>
                                            <option value="" selected>{{$appointment->doctor_first_name}}</option>
                                        </select>
                                        @endif
                                        @if($appointment->status != 'Pending' && !$appointment->doctor_first_name)
                                        <select name="doctor_id" class="form-control form-select show-tick" required>
                                            <option selected disabled value="">-- Select --</option>
                                            @foreach($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{$doctor->first_name}}</option>
                                            @endforeach
                                        </select>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Symptom:</label>
                                        <div class="form-line">
                                            <textarea rows="4" name="staff_note" class="form-control no-resize" placeholder="Please type what you want...">{{$appointment->self_check_symptom   }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <a href="{{route('all-appointment.index')}}" class="btn btn-primary waves-effect">Back to list</a>
                                        @if($appointment->status == 'Pending')
                                        <a href="{{route('admin.appointment.edit', $appointment->id)}}" class="btn btn-raised bg-teal">Edit</a>
                                        <button type="submit" class="btn btn-raised bg-orange" onclick="approveForm()">Approve</button>
                                        <button type="submit" class="btn btn-raised bg-red" onclick="rejectForm()">Reject</button>
                                        @elseif($appointment->status == 'Accepted')
                                        <a href="{{route('admin.appointment.edit', $appointment->id)}}" class="btn btn-raised bg-teal">Edit</a>
                                        @elseif($appointment->status == 'Done'||$appointment->status == 'Cancelled')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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

<!-- script set atrribute form id appointmentForm action & method -->
<script>
    function approveForm() {
        document.getElementById('appointmentForm').action = "/admin/appointment/{{$appointment->id}}/approve";
        document.getElementById('appointmentForm').method = "POST";
    }

    function rejectForm() {
        document.getElementById('appointmentForm').action = "/admin/appointment/{{$appointment->id}}/reject";
        document.getElementById('appointmentForm').method = "POST";
    }
</script>
<!-- end extraJs -->
@endsection