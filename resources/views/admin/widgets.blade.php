@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<link rel="stylesheet" href="{!! url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}" />
<!-- end extra css -->
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Widgets</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card">
                    <div class="body">
                        <h3>50.5 Gb</h3>
                        <p class="text-muted">Traffic this month</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="success">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last month</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card">
                    <div class="body">
                        <h3>26.8%</h3>
                        <p class="text-muted">Server Load</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="danger">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last month</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card">
                    <div class="body">
                        <h3>$ 14,500</h3>
                        <p class="text-muted">Total Sale</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="warning">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">15% higher than last month</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card">
                    <div class="body">
                        <h3>1,600</h3>
                        <p class="text-muted">Total Feedbacks</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="info">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">10% higher than last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="card patients_status">
                    <div class="header">
                        <h2>Patients Status</h2>
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
                    <div class="body">
                        <div class="table-responsive table_middel">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Patients</th>
                                        <th>Adress</th>
                                        <th>START Date</th>
                                        <th>END Date</th>
                                        <th>Priority</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/images/xs/avatar3.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>John</span></td>
                                        <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                        <td>Sept 13, 2017</td>
                                        <td>Sept 16, 2017</td>
                                        <td><span class="badge badge-warning">MEDIUM</span></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Admit</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
                                        <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                        <td>Sept 13, 2017</td>
                                        <td>Sept 22, 2017</td>
                                        <td><span class="badge badge-warning">MEDIUM</span></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Discharge</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/images/xs/avatar4.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Dean Otto</span></td>
                                        <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                        <td>Sept 13, 2017</td>
                                        <td>Sept 23, 2017</td>
                                        <td><span class="badge badge-warning">MEDIUM</span></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Admit</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="assets/images/xs/avatar2.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
                                        <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                        <td>Sept 17, 2017</td>
                                        <td>Sept 16, 2017</td>
                                        <td><span class="badge badge-success">LOW</span></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Discharge</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="assets/images/xs/avatar5.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Hughe L.</span></td>
                                        <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                        <td>Sept 18, 2017</td>
                                        <td>Sept 18, 2017</td>
                                        <td><span class="badge badge-danger">HIGH</span></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Admit</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>PATIENT Reports</h2>
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
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Charts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A011</td>
                                        <td>Dean Otto</td>
                                        <td>
                                            <span class="sparkbar">5,8,6,3,5,9,2</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A012</td>
                                        <td>K. Thornton</td>
                                        <td>
                                            <span class="sparkbar">10,8,9,3,5,8,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A013</td>
                                        <td>Kane D.</td>
                                        <td>
                                            <span class="sparkbar">7,5,9,3,5,2,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A014</td>
                                        <td>Jack Bird</td>
                                        <td>
                                            <span class="sparkbar">10,8,1,3,3,8,7</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A015</td>
                                        <td>Hughe L.</td>
                                        <td>
                                            <span class="sparkbar">2,8,9,8,5,1,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A016</td>
                                        <td>Jack Bird</td>
                                        <td>
                                            <span class="sparkbar">1,8,2,3,9,8,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A017</td>
                                        <td>Jack Bird</td>
                                        <td>
                                            <span class="sparkbar">1,8,2,3,9,8,5</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Hospital Budget</h2>
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
                    <div class="body">
                        <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                        <canvas id="line_chart" height="157" width="677" style="display: block; width: 542px; height: 126px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box-3 bg-green">
                    <div class="icon">
                        <div class="chart chart-bar">6,8,6,8,10,2,11,4</div>
                    </div>
                    <div class="content">
                        <div class="text">Total Income</div>
                        <div class="number">$127 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box-3 bg-blush">
                    <div class="icon">
                        <div class="chart chart-bar">6,7,3,8,10,5,3,4</div>
                    </div>
                    <div class="content">
                        <div class="text">Unique Patients</div>
                        <div class="number">457</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box-3 bg-blue">
                    <div class="icon"> <span class="chart chart-line">9,4,6,5,6,4,7,3</span> </div>
                    <div class="content">
                        <div class="text">Monthly Income</div>
                        <div class="number">$125</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box-3 bg-blue-grey">
                    <div class="icon">
                        <div class="chart chart-bar">4,6,-3,-1,2,-2,4,6</div>
                    </div>
                    <div class="content">
                        <div class="text">Net Profit</div>
                        <div class="number">$1 063</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="assets/images/puppy-1.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Thumbnail label</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <a href="widgets.html#" class="btn btn-raised g-bg-cyan waves-effect waves-effect">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thumbnail label</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <a href="widgets.html#" class="btn btn-raised g-bg-cyan waves-effect waves-effect">See Profile</a>
                    </div>
                    <img class="card-img-top" src="assets/images/puppy-2.jpg" alt="Card image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="assets/images/puppy-3.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Thumbnail label</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <a href="widgets.html#" class="btn btn-raised g-bg-cyan waves-effect waves-effect">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thumbnail label</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <a href="widgets.html#" class="btn btn-raised g-bg-cyan waves-effect waves-effect">See Profile</a>
                    </div>
                    <img class="card-img-top" src="assets/images/puppy-4.jpg" alt="Card image">
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis <small>18% High then last month</small></h2>
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
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-indigo">70.40%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-indigo">25.80%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-indigo">12.50%</b>
                            </div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222" data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)" data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)" data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis <small>18% High then last month</small></h2>
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
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-blue-grey">80.40%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-blue-grey">13.00%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-blue-grey">9.50%</b>
                            </div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222" data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)" data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)" data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis <small>18% High then last month</small></h2>
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
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-green">84.60%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-green">15.40%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-green">5.10%</b>
                            </div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222" data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)" data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)" data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Recent sales</h2>
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
                    <div class="body">
                        <div class="row sales-report">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>Jan 2017</h2>
                                <p>SALES REPORT</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h1 class="text-right text-success m-t-20">$4,231</h1>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>STATUS</th>
                                        <th>DATE</th>
                                        <th>PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="txt-oflo">Ipsum is simply</td>
                                        <td><span class="label label-success">SALE</span> </td>
                                        <td class="txt-oflo">Feb 11, 2017</td>
                                        <td><span class="text-success">$25</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="txt-oflo">Lorem Ipsum is</td>
                                        <td><span class="label label-info">EXTENDED</span></td>
                                        <td class="txt-oflo">March 29, 2017</td>
                                        <td><span class="text-info">$1234</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="txt-oflo">Lorem Ipsum is simply</td>
                                        <td><span class="label label-danger">TAX</span></td>
                                        <td class="txt-oflo">April 21, 2017</td>
                                        <td><span class="text-danger">-$204</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="txt-oflo">Hosting press html</td>
                                        <td><span class="label label-warning">SALE</span></td>
                                        <td class="txt-oflo">Jun 22, 2017</td>
                                        <td><span class="text-success">$24</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="txt-oflo">Lorem is simply</td>
                                        <td><span class="label label-success">member</span></td>
                                        <td class="txt-oflo">July 20, 2017</td>
                                        <td><span class="text-success">$21</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="txt-oflo">Lorem Ipsum simply</td>
                                        <td><span class="label label-success">SALE</span> </td>
                                        <td class="txt-oflo">July 21, 2017</td>
                                        <td><span class="text-danger">-$12</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td class="txt-oflo">Lorem Ipsum is simply</td>
                                        <td><span class="label label-warning">member</span></td>
                                        <td class="txt-oflo">July 21, 2017</td>
                                        <td><span class="text-success">$54</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="javascript:void(0);">Check all the sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Our Location </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="world-map-markers" class="jvector-map"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->

<script src="{!! url('assets/bundles/chartscripts.bundle.js') !!}"></script>
<script src="{!! url('assets/js/pages/index.js') !!}"></script>
<script src="{!! url('assets/bundles/sparklinescripts.bundle.js') !!}"></script> 
<script src="{!! url('assets/bundles/jvectormapscripts.bundle.js') !!}"></script> 
<script src="{!! url('assets/plugins/jquery-countto/jquery.countTo.js') !!}"></script> 
<script src="{!! url('assets/js/pages/widgets/infobox/infobox-1.js') !!}"></script>
<script src="{!! url('assets/js/pages/maps/jvectormap.js') !!}"></script>
<script src="{!! url('assets/js/pages/cards/basic.js') !!}"></script> 
<script src="{!! url('assets/js/pages/charts/sparkline.min.js') !!}"></script>

<!-- end extraJs -->
') !!}
@endsection