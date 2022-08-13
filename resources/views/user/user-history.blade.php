@extends('user.layouts._master')


@section('extraCss')
<!-- extra css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<link href="{!! url('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">
<!-- <link rel="stylesheet" href="{!! url('assets/css/admin-style.css') !!}"> -->
<!-- end extra css -->
@endsection

@section('content')

<h1 class="text-center">MEDICAL HISTORY</h1>
<div class="container w-90">
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
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- check_out_histories -->
                    <?php $i = 1; ?>
                    @foreach($check_out_histories as $check_out_history)
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>{{ $check_out_history->created_at }}</td>
                        <td>{{ $check_out_history->department_name }}</td>
                        <td>{{ $check_out_history->hospital_name }}</td>
                        <td>{{ $check_out_history->doctor_first_name }}</td>
                        <td>
                            <a href="#" class="btn btn-primary waves-effect btn-sm">View</a>
                            <a href="#" class="btn btn-danger waves-effect btn-sm">Cancel</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@section('extraJs')
<!-- extraJs -->

<script src="{!! url('assets/bundles/libscripts.bundle.js') !!}"></script>
<script src="{!! url('assets/bundles/vendorscripts.bundle.js') !!}"></script>
<script src="{!! url('assets/bundles/mainscripts.bundle.js') !!}"></script>
<script src="{!! url('assets/bundles/datatablescripts.bundle.js') !!}"></script>
<script src="{!! url('assets/js/morphing.js') !!}"></script>
<script src="{!! url('assets/js/pages/tables/jquery-datatable.js') !!}"></script>

<!-- end extraJs -->
@endsection