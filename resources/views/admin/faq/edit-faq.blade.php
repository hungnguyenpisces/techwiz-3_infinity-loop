@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<link rel="stylesheet" href="/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
<link rel="stylesheet" href="/assets/plugins/waitme/waitMe.css" />
<link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css" />


@endsection


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>FAQ Detail</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h2>FAQ Information</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="#" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="#" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form id="appointmentForm" action="/faq/update" method="post">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Question Page:</label>
                                            <input type="text" class="form-control" placeholder="Question Page" value="{{$faq->question}}" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Answer:</label>
                                            <input type="text" class="form-control" placeholder="Answer" value="{{$faq->answer}}" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <a href="{{route('admin.faq.index')}}" class="btn btn-primary waves-effect">Back to list</a>
                                        <button type="submit" class="btn btn-raised bg-deep-purple" >Update</button>
                                        <button type="submit" class="btn btn-raised bg-red" onclick="cancelForm()">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->
<script src="/assets/plugins/autosize/autosize.js"></script>
<script src="/assets/plugins/momentjs/moment.js"></script>
<script src="/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="/assets/js/pages/forms/basic-form-elements.js"></script>
<script>
    function updateForm() {
        document.getElementById('appointmentForm').action = "/admin/faq/{{$faq->id}}/update";
        document.getElementById('appointmentForm').method = "POST";
    }
    function cancleForm() {
        document.getElementById('appointmentForm').action = "/admin/faq/{{$faq->id}}/cancle";
        document.getElementById('appointmentForm').method = "POST";
    }
</script>
<!-- end extraJs -->
@endsection