@extends('user.layouts._master')

@section('content')
<section class="mt-5">
    <h1 class="text-center">APPOINTMENTS</h1>
    <div class="container">
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
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Time</th>
                            <th>Department</th>
                            <th>Hospital</th>
                            <th>Doctor</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>

                        @foreach($appointments as $appointment)

                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>{{ $appointment->created_at }}</td>
                            <td>{{ $appointment->department_name }}</td>
                            <td>{{ $appointment->hospital_name }}</td>
                            <td>{{ $appointment->doctor_first_name }}</td>
                            <td>
                                @if($appointment->status == 'pending')
                                    <span class="badge badge-warning">{{ $appointment->status }}</span>
                                @elseif($appointment->status == 'approved')
                                    <span class="badge badge-success">{{ $appointment->status }}</span>
                                @elseif($appointment->status == 'Cancelled')
                                    <span class="badge badge-danger">{{ $appointment->status }}</span>
                                @else
                                    <span class="text-bg-primary badge badge-primary">{{ $appointment->status }}</span>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#medicineDetail">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </td>

                    </tbody>
  @endforeach

@endsection

@section('extraJs')

@endsection

