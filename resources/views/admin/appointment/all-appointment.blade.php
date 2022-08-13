@extends('admin.layouts._master')

@section('title')
Appointments Management
@endsection

@section('extraCss')
<!-- extra css -->
<link href="{!! url('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">
<!-- end extra css -->
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointments</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
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
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ $appointment->time }}</td>
                                    <td>{{ $appointment->status }}</td>
                                    <td>
                                        <a href="{{ url('admin.appointment.edit', $appointment->id) }}" class="btn btn-primary waves-effect btn-sm">Edit</a>
                                        <a href="{{ url('admin.appointment.delete', $appointment->id) }}" class="btn btn-danger waves-effect btn-sm">Delete</a>
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
<script src="{!! url('assets/bundles/datatablescripts.bundle.js') !!}"></script>
<script src="{!! url('assets/js/morphing.js') !!}"></script>
<script src="{!! url('assets/js/pages/tables/jquery-datatable.js') !!}"></script>

<!-- end extraJs -->
@endsection