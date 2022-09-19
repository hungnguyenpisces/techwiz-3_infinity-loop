
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

        <h1 class="text-center mt-3 mb-3">Health list</h1>
        <h3 class="text-center mt-3 mb-3">You get more healthy information once a week</h3>
        <div class="d-flex  mb-2">
            <div class="button wow fadeInLeft" data-wow-delay=".3s">
                <a href="/user-health" class="btn">Add Health</a>
            </div>
        </div>
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
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Heart Rate</th>
                                <th>Blood pressure</th>
                                <th>Date created</th>
                                <th>Date change</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Heart Rate</th>
                                <th>Blood pressure</th>
                                <th>Date created</th>
                                <th>Date change</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($health_indices as $health)
                                <tr>
                                    <td>{{ $health->height }}</td>
                                    <td>{{ $health->weight }}</td>
                                    <td>{{ $health->blood_pressure }}</td>
                                    <td>{{ $health->heart_rate }}</td>
                                    <td>{{ $health->created_at }}</td>
                                    <td>{{ $health->updated_at }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center mb-2">
                                            <a href='{{route("healthIndex.edit" , $health->id)}}' class="btn btn-secondary">Edit record</a>
                                        </div>
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
