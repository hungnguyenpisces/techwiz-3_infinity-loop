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
            <!-- <div class="block-header">
                <h2>Appointments</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div> -->
            <!-- check if session has success -->
            @if (session('success'))
            <div style="margin-left: 15px">
                <p class="alert alert-success">{{ session('success') }}</p>
            </div>
            @endif
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
                                    <th>ID</th>
                                    <th>Patient's name</th>
                                    <th>Gender</th>
                                    <th>Blood group</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach($patients as $patient)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $patient->first_name }} {{$patient->last_name}}</td>
                                    <td>{{$patient -> gender}}</td>
                                    <td>{{$patient -> blood_group}}</td>
                                    <td>{{$patient -> phone}}</td>
                                    <td>{{$patient -> address}}</td>
                                    <td>{{$patient -> email}}</td>
                                    <td>
                                        <a href="#"> 
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
<script src="/assets/js/pages/tables/jquery-datatable.js"></script>
<!-- end extraJs -->
@endsection