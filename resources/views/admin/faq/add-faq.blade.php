@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<link rel="icon" href="{!! url('favicon.ico') !!}" type="image/x-icon">
<link rel="stylesheet" href="{!! url('https://fonts.googleapis.com/icon?family=Material+Icons') !!}" type="text/css">
<link rel="stylesheet" href="{!! url('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') !!}" />
<link rel="stylesheet" href="{!! url('assets/plugins/waitme/waitMe.css') !!}" />
<link rel="stylesheet" href="{!! url('assets/plugins/bootstrap-select/css/bootstrap-select.css') !!}" />


@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Create Question For FAQs</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h2>Question Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type question's page..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type the answer..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                            <button type="submit" class="btn btn-raised">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->
<script src="{!! url('assets/plugins/autosize/autosize.js') !!}"></script>
<script src="{!! url('assets/plugins/momentjs/moment.js') !!}"></script>
<script src="{!! url('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') !!}"></script>
<script src="{!! url('assets/js/pages/forms/basic-form-elements.js') !!}"></script>

<!-- end extraJs -->
@endsection