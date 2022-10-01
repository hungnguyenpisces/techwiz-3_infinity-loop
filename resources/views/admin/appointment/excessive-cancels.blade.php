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
        <div class="block-header">
            <h2>High cancel rates</h2>
            <small class="text-muted">Those who create phantom appointments for fun</small>
        </div>
        <!-- check if session has success -->
        <div class="row clearfix">
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
                                    <th>Patient last name</th>
                                    <th>Patient first name</th>
                                    <th>Cancel rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Patient last name</th>
                                    <th>Patient first name</th>
                                    <th>Cancel rate</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($users as $user)
                                @if ($user->cancelRate() > 70)
                                <tr>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->cancelRate() }}%</td>
                                    <td>
                                        <a href="{{ route('users.block', $user->id) }}" class="btn btn-primary waves-effect">
                                            <i class="material-icons">block</i>
                                        </a>
                                    </td>
                                </tr>
                                @endif
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
<script>
    $(document).ready(function() {
        var table = $('.js-basic-example').DataTable();
        table.order( [ 2, 'desc' ] ).draw();
    });
</script>

<!-- end extraJs -->
@endsection
