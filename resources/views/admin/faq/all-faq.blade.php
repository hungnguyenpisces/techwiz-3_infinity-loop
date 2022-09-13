@extends('admin.layouts._master')

@section('title')
FAQs Management
@endsection

@section('extraCss')
<!-- extra css -->
<link href="/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- end extra css -->
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="block-header">
                <h2>FAQs</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
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
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($faq as $fq)
                                <tr>
                                    <td>{{$fq->question}}</td>
                                    <td>{{$fq->answer}}</td>
                                    <td>{{$fq->created_at}}</td>
                                    <td>{{$fq->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('admin.faq.edit', $fq->id) }}" class="btn btn-primary waves-effect">
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