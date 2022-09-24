@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<!-- khúc này để import file thêm file css nếu cần thiết --> -->
<!-- end extra css -->
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
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
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Fullname</th>
                                    <th>Image</th>
                                    <th>Department</th>
                                    <th>Hospital</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lsDoc as $appointment)
                                <tr>
                                    <td>{{ $appointment-> last_name }}{{ $appointment-> first_name}}</td>
                                    <td></td>
                                    <td>{{ $appointment->department_name }}</td>
                                    <td>{{ $appointment->hospital_name }}</td>
                                    <td>{{ $appointment->position }}</td>
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