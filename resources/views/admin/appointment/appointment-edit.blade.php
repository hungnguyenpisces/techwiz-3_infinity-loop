@extends('admin.layouts._master')

@section('title')
    Custom title if need
@endsection

@section('extraCss')
    <!-- extra css -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
    <link rel="stylesheet"
          href="/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"/>
    <link rel="stylesheet" href="/assets/plugins/waitme/waitMe.css"/>
    <link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css"/>

@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointment Detail</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <!-- if session has success-check-out -->
        @if (session('success-check-out'))
        <div class="alert alert-success">
            {{ session('success-check-out') }}
        </div>
        @endif
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
                                                <input type="text" class="datepicker form-control"
                                                       placeholder="Date of Birth"
                                                       value="{{$appointment->user->date_of_birth}}" disabled>
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
                                                <option value="{{$appointment->user->blood_group}}"
                                                        selected>{{$appointment->user->blood_group}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">Email</label>
                                                <input type="text" class="datepicker form-control" placeholder="Email"
                                                       value="{{$appointment->user->email}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="form-group drop-custum">
                                            <label for="">Phone:</label>
                                            <input type="text" class="datepicker form-control" placeholder="Phone"
                                                   value="{{$appointment->user->phone}}" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6 ">
                                        <div class="form-group drop-custum">
                                            <label for="">Address:</label>
                                            <input type="text" class="datepicker form-control" placeholder="Address"
                                                   value="{{$appointment->user->address}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">Appointment time: </label>
                                                <input type="text" class="datetimepicker form-control" name="datetime"
                                                       value="{{$appointment->date}} {{$appointment->time}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-4 ">
                                        <div class="form-group drop-custum">
                                            <label for="">Hospital:</label>
                                            <select name="hospital_id" class="form-control form-select show-tick"
                                                    required>
                                                @foreach($hospitals as $hospital)
                                                    @if($hospital->id == $appointment->hospital_id)
                                                        <option value="{{$appointment->hospital_id}}"
                                                                selected>{{$appointment->hospital_name}}</option>
                                                    @else
                                                        <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">Department:</label>
                                                <select name="department_id" class="form-control form-select show-tick"
                                                        required>
                                                    @foreach($departments as $department)
                                                        @if($department->id == $appointment->department_id)
                                                            <option value="{{$appointment->department_id}}"
                                                                    selected>{{$appointment->department_name}}</option>
                                                        @else
                                                            <option
                                                                value="{{$department->id}}">{{$department->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <div class="form-group drop-custum">
                                            <label for="">Doctor:</label>
                                            @if($appointment->status == 'Pending' && !$appointment->doctor_first_name)
                                                <select name="doctor_id" class="form-control form-select show-tick"
                                                        required>
                                                    <option selected disabled value="">-- Select --</option>
                                                    @foreach($doctors as $doctor)
                                                        <option value="{{$doctor->id}}">{{$doctor->first_name}}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                            @if($appointment->status == 'Pending' && $appointment->doctor_first_name)
                                                <select name="doctor_id" class="form-control show-tick">
                                                    @foreach($doctors as $doctor)
                                                        @if($doctor->id == $appointment->doctor_id)
                                                            <option value="{{$doctor->id}}"
                                                                    selected>{{$doctor->first_name}}</option>
                                                        @else
                                                            <option
                                                                value="{{$doctor->id}}">{{$doctor->first_name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            @endif
                                            @if($appointment->status != 'Pending' && $appointment->doctor_first_name)
                                                <select name="doctor_id" class="form-control show-tick">
                                                    @foreach($doctors as $doctor)
                                                        @if($doctor->id == $appointment->doctor_id)
                                                            <option value="{{$doctor->id}}"
                                                                    selected>{{$doctor->first_name}}</option>
                                                        @else
                                                            <option
                                                                value="{{$doctor->id}}">{{$doctor->first_name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            @endif
                                            @if($appointment->status != 'Pending' && !$appointment->doctor_first_name)
                                                <select name="doctor_id" class="form-control form-select show-tick"
                                                        required>
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
<<<<<<< HEAD
                                        <a href="{{route('all-appointment.index')}}" class="btn btn-primary waves-effect">Back to list</a>
                                        <button type="submit" class="btn btn-raised bg-deep-purple" onclick="updateForm()">Update</button>
                                        <!-- check if status is Accepted and session has success-check-out -->
                                        @if($appointment->status == 'Accepted' && !session('success-check-out'))
                                        <a href="{{route('admin.checkout.show', $appointment->id)}}" class="btn btn-success waves-effect">Check Out</a>
                                        @endif
                                        @if($appointment->status == 'Accepted' && session('success-check-out') == 'success' && $coh->isPaid == 1)
                                        <button type="submit" class="btn btn-raised bg-green" onclick="markAsDone()">Mark as Done</button>
                                        @endif
                                        <button type="submit" class="btn btn-raised bg-red" onclick="cancelForm()">Cancel</button>
=======
                                        <div class="form-group">
                                            <label for="">Symptom: </label>
                                            <div class="form-line">
                                                <textarea rows="1" name="self_check_symptom"
                                                          class="form-control no-resize"
                                                          value="{{$appointment->self_check_symptom}}"
                                                          readonly>{{$appointment->self_check_symptom}}</textarea>
                                            </div>
                                        </div>
>>>>>>> d88913331f2e47793533e8084444f42c45828718
                                    </div>
                                </div>
                                <div class="body">
                                    <form id="medicineForm" action="" method="">
                                        @csrf
                                        <table>
                                            <thead>
                                            <tr>
                                                <td>Medicine Name</td>
                                                <td>Unit per time</td>
                                                <td>Time per day</td>
                                                <td>Period</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td name="medicineName"><input type="text" id="medicineName"
                                                                               placeholder="Medicine Name"></td>
                                                <td name="unitpertime"><input type="text" id="unitpertime"
                                                                              placeholder="Unit per time"></td>
                                                <td name="timeperday"><input type="text" id="timeperday"
                                                                             placeholder="Time per day"></td>
                                                <td name="period"><input type="text" id="period" placeholder="Period">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="hiep" action="">

                                    </form>
                                    <button type="button" class="btn btn-info btn_create_new_option" id="add-row">New
                                        row +
                                    </button>
                                </div>

{{--                            <tabble>--}}
{{--                                <input type="text" id="name" placeholder="Medicine Name">--}}
{{--                                <input type="text" id="time" placeholder="unit per time">--}}
{{--                                <input type="text" id="day" placeholder="time per day">--}}
{{--                                <input type="text" id="period" placeholder="period">--}}
{{--                                <input type="button" class="add-row" value="Add Row">--}}
{{--                            </tabble>--}}
{{--                            <table>--}}
{{--                                <thead>--}}
{{--                                <tr>--}}

{{--                                    <th>Medicine Name</th>--}}
{{--                                    <th>unit per time</th>--}}
{{--                                    <th>time per day</th>--}}
{{--                                    <th>period</th>--}}
{{--                                    <th>Select</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}

{{--                                    <td name="MedicineName"> </td>--}}
{{--                                    <td name="unitpertime"> </td>--}}
{{--                                    <td name="timeperday"> </td>--}}
{{--                                    <td name="period"></td>--}}
{{--                                    <td><input type="checkbox" name="record"></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}


                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Type note here:</label>
                                        <div class="form-line">
                                            <textarea rows="4" name="staff_note" class="form-control no-resize" placeholder="Please type what you want...">{{$appointment->staff_note}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <a href="{{route('all-appointment.index')}}" class="btn btn-primary waves-effect">Back to list</a>
                                        <button type="submit" class="btn btn-raised bg-deep-purple" onclick="updateForm()">Update</button>
                                        <!-- check if status is Accepted and session has success-check-out -->
                                        @if($appointment->status == 'Accepted' && !session('success-check-out'))
                                        <a href="{{route('admin.checkout.show', $appointment->id)}}" class="btn btn-success waves-effect">Check Out</a>
                                        @endif
                                        @if($appointment->status == 'Accepted' && session('success-check-out') == 'success' && $coh->isPaid == 1)
                                        <button type="submit" class="btn btn-raised bg-green" onclick="markAsDone()">Mark as Done</button>
                                        @endif
                                        <button type="submit" class="btn btn-raised bg-red" onclick="cancelForm()">Cancel</button>
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
    <script>
        function updateForm() {
            document.getElementById('appointmentForm').action = "/admin/appointment/{{$appointment->id}}/update";
            document.getElementById('appointmentForm').method = "POST";
        }

    function cancelForm() {
        document.getElementById('appointmentForm').action = "/admin/appointment/{{$appointment->id}}/reject";
        document.getElementById('appointmentForm').method = "POST";
    }

    function markAsDone() {
        document.getElementById('appointmentForm').action = "/admin/appointment/{{$appointment->id}}/done";
        document.getElementById('appointmentForm').method = "POST";
    }
</script>
{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
<script>
    $(document).ready(function(){
        $(".add-row").click(function(){
            var name = $("#name").val();
            var time = $("#time").val();
            var day = $("#day").val();
            var period = $("#period").val();

                $('#hiep').append(`
                     <div class="body" id="${id}">
                          <form id="medicineForm" action="" method="">
                          @csrf
                <table>
                    <thead>
                        <tr>
                            <td>Medicine Name</td>
                            <td>Unit per time</td>
                            <td>Time per day</td>
                            <td>Period</td>
                        </tr>
                    </thead>
                        <tbody>
                        <tr>
                            <td><input type="text" id="medicineName${i}" name="medicineName${i}" placeholder="Medicine Name"></td>
                            <td><input type="text" id="unitpertime${i}"  name="unitpertime${i}" placeholder="Unit per time"></td>
                            <td><input type="text" id="timeperday${i}"  name="timeperday${i}" placeholder="Time per day"></td>
                            <td><input type="text" id="period${i}"  name="period${i}" placeholder="Period"></td>
                        </tr>
                    </tbody>
                </table>
              </form>
        </div>
                `)

            })
            i++;
        })
        function close_option(id) {
            document.getElementById(id).remove()
        }
    </script>
    <!-- end extraJs -->
@endsection
