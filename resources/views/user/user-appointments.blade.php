@extends('user.layouts._master')
@section('extraCss')
<link href="/assets/css/datatable.css" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<!-- end common style Css -->
<!-- extra css -->

@endsection

@section('content')
<section class="content container">
    <h1 class="text-center mt-3 mb-3">Appointments list</h1>
    <div class="row clearfix">
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
                @foreach(['danger', 'success', 'warning', 'info'] as $type)
                    @if(\Illuminate\Support\Facades\Session::has($type))
                        <p class="alert alert-{{$type}}">
                            {{\Illuminate\Support\Facades\Session::get($type)}}
                        </p>
                    @endif
                @endforeach
                <div class="body table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Hospital</th>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Department</th>
                                <th>Hospital</th>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->department_name }}</td>
                                <td>{{ $appointment->hospital_name }}</td>
                                @if(!$appointment->doctor_first_name)
                                <td>N/A</td>
                                @elseif($appointment->doctor_first_name)
                                <td>{{ $appointment->doctor_first_name }}</td>
                                @endif
                                <td>{{ $appointment->date }}</td>
                                <!-- <td>{{ $appointment->status }}</td> -->
                                @if($appointment->status == 'Pending')
                                <td><span class="text-bg-warning badge badge-warning">{{ $appointment->status }}</span></td>
                                @elseif($appointment->status == 'Accepted')
                                <td><span class="text-bg-success badge badge-success">{{ $appointment->status }}</span></td>
                                @elseif($appointment->status == 'Done')
                                <td><span class="text-bg-primary badge badge-primary">{{ $appointment->status }}</span></td>
                                @elseif($appointment->status == 'Cancelled')
                                <td><span class="text-bg-danger badge badge-danger">{{ $appointment->status }}</span></td>
                                @endif
                                <td class="text-center">
                                    <a href="{{ route('appointment.detail', $appointment->id) }}" class="btn btn-success waves-effect">
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
</section>


@endsection
@section('extraJs')
    <script type="text/javascript">
        function confirmDelete() {
            var value =  confirm("Sure ?");
            return value;
        }
    </script>

<script src="/assets/bundles/libscripts.bundle.js"></script>
<script src="/assets/bundles/datatablescripts.bundle.js"></script>
<script src="/assets/js/pages/tables/jquery-datatable.js"></script>
@endsection
