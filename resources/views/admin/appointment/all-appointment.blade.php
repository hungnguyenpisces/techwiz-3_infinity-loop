@extends('admin.layouts._master')

@section('title')
Appointments Management
@endsection

@section('extraCss')
<!-- extra css -->
<link href="/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- end extra css -->
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="block-header">
                <h2>Appointments</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient last name</th>
                                    <th>Patient first name</th>
                                    <th>Department</th>
                                    <th>Hospital</th>
                                    <th>Symptom status</th>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Patient last name</th>
                                    <th>Patient first name</th>
                                    <th>Department</th>
                                    <th>Hospital</th>
                                    <th>Symptom status</th>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->user->last_name }}</td>
                                    <td>{{ $appointment->user->first_name }}</td>
                                    <td>{{ $appointment->department_name }}</td>
                                    <td>{{ $appointment->hospital_name }}</td>
                                    <td>{{ $appointment->self_check_symptom }}</td>
                                    @if(!$appointment->doctor_first_name)
                                    <td>N/A</td>
                                    @elseif($appointment->doctor_first_name)
                                    <td>{{ $appointment->doctor_first_name }}</td>
                                    @endif
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ $appointment->time }}</td>
                                    <!-- <td>{{ $appointment->status }}</td> -->
                                    @if($appointment->status == 'Pending')
                                    <td><span class="badge bg-orange">{{ $appointment->status }}</span></td>
                                    @elseif($appointment->status == 'Accepted')
                                    <td><span class="badge bg-green">{{ $appointment->status }}</span></td>
                                    @elseif($appointment->status == 'Done')
                                    <td><span class="badge bg-blue">{{ $appointment->status }}</span></td>
                                    @elseif($appointment->status == 'Cancelled')
                                    <td><span class="badge bg-red">{{ $appointment->status }}</span></td>
                                    @endif
                                    <td>
                                        <a href="{{ route('admin.appointment.detail', $appointment->id) }}" class="btn btn-primary waves-effect">
                                            <i class="material-icons">remove_red_eye</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('extraJs')
<!-- extraJs -->
<script src="/assets/bundles/datatablescripts.bundle.js"></script>
<script src="/assets/js/morphing.js"></script>
<script src="/assets/js/pages/tables/jquery-datatable.js"></script>

<!-- end extraJs -->
@endsection
