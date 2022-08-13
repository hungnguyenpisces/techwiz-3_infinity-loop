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

<div class="modal fade pill-details" tabindex="-1" role="dialog" aria-labelledby="medicineDetail" id="medicineDetail" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="border-radius: 0px;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #88c250;">
                <h4 class="modal-title text-center">Medical history details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="text" class="form-control" id="" placeholder="Date" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Hospital</label>
                            <input type="text" class="form-control" id="" placeholder="Hospital" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Department</label>
                            <input type="text" class="form-control" id="" placeholder="Department" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Doctor</label>
                            <input type="text" class="form-control" id="" placeholder="Doctor" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Symptom</label>
                            <textarea class="form-control" id="" rows="5" readonly></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Conclusion</label>
                            <textarea class="form-control" id="" rows="5" readonly></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group" style="padding: 0px 25px">
                    <table class="table">
                        <label for="">Medicine details</label>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Medicine name</th>
                                <th scope="col">Dosage</th>
                                <th scope="col">Time to use</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Panadone</td>
                                <td>2</td>
                                <td>after meals</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
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