@extends('user.layouts._master')


@section('extraCss')
<!-- extra css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<!-- end extra css -->
@endsection

@section('content')

<section class="mt-5">
    <h1 class="text-center">MEDICAL HISTORY</h1>
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
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="dataTable">
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
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#medicineDetail">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

@section('extraJs')
<!-- extraJs -->

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<!-- end extraJs -->
@endsection