@extends('admin.layouts._master')

@section('title')
    Custom title if need
@endsection

@section('extraCss')
    <!-- extra css -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
    <link rel="stylesheet" href="/assets/plugins/waitme/waitMe.css" />
    <link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css" />


    <!-- end extra css -->
@endsection


@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Payment</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Payment Information <small>Description text here...</small> </h2>
                            <ul class="header-dropdown">
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
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Payment Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Patient Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Doctor Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Payment Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Total Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Discount">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick">
                                            <option value="">-- Payment Method --</option>
                                            <option>Cash</option>
                                            <option>Cheque</option>
                                            <option>Credit Card</option>
                                            <option>Debit Card</option>
                                            <option>Netbanking</option>
                                            <option>Insurance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick">
                                            <option value="">-- Payment Status --</option>
                                            <option>Select Status</option>
                                            <option>Complete</option>
                                            <option>Pending</option>
                                            <option>Partial</option>
                                        </select>
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

    <script src="/assets/plugins/autosize/autosize.js"></script>
    <script src="/assets/plugins/momentjs/moment.js"></script>

    <script src="/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


    <!-- end extraJs -->
@endsection
