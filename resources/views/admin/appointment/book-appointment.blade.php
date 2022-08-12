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

    <section>

        <aside id="leftsidebar" class="sidebar">

            <div class="user-info">
                <div class="admin-image"> <img src="{!! url('assets/images/random-avatar7.jpg') !!}" alt=""> </div>

                <div class="admin-action-info"> <span>Welcome</span>
                    <h3>Dr. John</h3>
                    <ul>
                        <li><a href="{!! url('mail-inbox.html') !!}" title="Go to Inbox"><i class="zmdi zmdi-email"></i></a></li>
                        <li><a href="{!! url('profile.html') !!}" title="Go to Profile"><i class="zmdi zmdi-account"></i></a></li>
                        <li><a href="{!! url('javascript:void(0);') !!}" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                        <li><a href="{!! 'sign-in.html' !!}" title="sign out"><i class="zmdi zmdi-sign-in"></i></a></li>
                    </ul>
                </div>
                <div class="quick-stats">
                    <h5>Today Report</h5>
                    <ul>
                        <li><span>16<i>Patient</i></span></li>
                        <li><span>20<i>Panding</i></span></li>
                        <li><span>04<i>Visit</i></span></li>
                    </ul>
                </div>
            </div>


            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                        <ul class="ml-menu">
                            <li><a href="doctor-schedule.html">Doctor Schedule</a></li>
                            <li class="active"><a href="book-appointment.html">Book Appointment</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                        <ul class="ml-menu">
                            <li><a href="doctors.html">All Doctors</a></li>
                            <li><a href="add-doctor.html">Add Doctor</a></li>
                            <li><a href="profile.html">Doctor Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                        <ul class="ml-menu">
                            <li><a href="patients.html">All Patients</a></li>
                            <li><a href="add-patient.html">Add Patient</a></li>
                            <li><a href="patient-profile.html">Patient Profile</a></li>
                            <li><a href="patient-invoice.html">Patient Invoice</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="payments.html">Payments</a></li>
                            <li> <a href="add-payments.html">Add Payment</a></li>
                            <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                        </ul>
                    </li>
                    <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
                    <li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a></li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="sign-in.html">Sign In</a> </li>
                            <li> <a href="sign-up.html">Sign Up</a> </li>
                            <li> <a href="forgot-password.html">Forgot Password</a> </li>
                            <li> <a href="404.html">Page 404</a> </li>
                            <li> <a href="500.html">Page 500</a> </li>
                            <li> <a href="page-offline.html">Page Offline</a> </li>
                            <li> <a href="locked.html">Locked Screen</a> </li>
                            <li> <a href="blank.html">Blank Page</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="typography.html">Typography</a> </li>
                            <li> <a href="helper-classes.html">Helper Classes</a></li>
                            <li> <a href="alerts.html">Alerts</a> </li>
                            <li> <a href="animations.html">Animations</a> </li>
                            <li> <a href="badges.html">Badges</a> </li>
                            <li> <a href="breadcrumbs.html">Breadcrumbs</a> </li>
                            <li> <a href="buttons.html">Buttons</a> </li>
                            <li> <a href="collapse.html">Collapse</a> </li>
                            <li> <a href="colors.html">Colors</a> </li>
                            <li> <a href="dialogs.html">Dialogs</a> </li>
                            <li> <a href="icons.html">Icons</a> </li>
                            <li> <a href="labels.html">Labels</a> </li>
                            <li> <a href="list-group.html">List Group</a> </li>
                            <li> <a href="media-object.html">Media Object</a> </li>
                            <li> <a href="modals.html">Modals</a> </li>
                            <li> <a href="notifications.html">Notifications</a> </li>
                            <li> <a href="pagination.html">Pagination</a> </li>
                            <li> <a href="preloaders.html">Preloaders</a> </li>
                            <li> <a href="progressbars.html">Progress Bars</a> </li>
                            <li> <a href="range-sliders.html">Range Sliders</a> </li>
                            <li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                            <li> <a href="tabs.html">Tabs</a> </li>
                            <li> <a href="waves.html">Waves</a> </li>
                        </ul>
                    </li>
                    <li class="header">LABELS</li>
                    <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
                    <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
                    <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li>
                </ul>
            </div>

        </aside>

        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="book-appointment.html#skins">Skins</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="book-appointment.html#chat">Chat</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="book-appointment.html#settings">Setting</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red"><div class="red"></div><span>Red</span> </li>
                        <li data-theme="purple"><div class="purple"></div><span>Purple</span> </li>
                        <li data-theme="blue"><div class="blue"></div><span>Blue</span> </li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div><span>Cyan</span> </li>
                        <li data-theme="green"><div class="green"></div><span>Green</span> </li>
                        <li data-theme="deep-orange"><div class="deep-orange"></div><span>Deep Orange</span> </li>
                        <li data-theme="blue-grey"><div class="blue-grey"></div><span>Blue Grey</span> </li>
                        <li data-theme="black"><div class="black"></div><span>Black</span> </li>
                        <li data-theme="blush"><div class="blush"></div><span>Blush</span> </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="chat">
                    <div class="demo-settings">
                        <div class="search">
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Search..." required autofocus>
                                </div>
                            </div>
                        </div>
                        <h6>Recent</h6>
                        <ul>
                            <li class="online">
                                <div class="media">
                                    <a href="javascript:void(0);"><img class="media-object " src="{!! url('assets/images/xs/avatar1.jpg') !!}" alt=""></a>
                                    <div class="media-body">
                                        <span class="name">Claire Sassu</span>
                                        <span class="message">Can you share the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a href="javascript:void(0);"><img class="media-object " src="{!! url('assets/images/xs/avatar2.jpg') !!}" alt=""></a>
                                    <div class="media-body">
                                        <span class="name">Maggie jackson</span>
                                        <span class="message">Can you share the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a href="javascript:void(0);"><img class="media-object " src="{!! url('assets/images/xs/avatar3.jpg') !!}" alt=""></a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span>
                                        <span class="message">Ready for the meeti</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h6>Contacts</h6>
                        <ul class="contacts_list">
                            <li class="offline">
                                <div class="media">
                                    <a href="javascript:void(0);"><img class="media-object " src="{!! url('assets/images/xs/avatar4.jpg') !!}" alt=""></a>
                                    <div class="media-body">
                                        <span class="name">Hossein Shams</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a href="javascript:void(0);"><img class="media-object " src="{!! url('assets/images/xs/avatar1.jpg') !!}" alt=""></a>
                                    <div class="media-body">
                                        <span class="name">Maryam Amiri</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="offline">
                                <div class="media">
                                    <a href="javascript:void(0);"><img class="media-object " src="{!! url('assets/images/xs/avatar2.jpg') !!}" alt=""></a>
                                    <div class="media-body">
                                        <span class="name">Gary Camara</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="demo-settings">
                        <p>General settings</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>System settings</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>Account settings</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Book Appointment</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="card">
                        <div class="header">
                            <h2>Appointment Information <small>Description text here...</small> </h2>
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
                            <div class="row clearfix">
                                <div class="col-sm-6 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Date of Birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick">
                                            <option value="">-- Gender --</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick">
                                            <option value="">-- Service --</option>
                                            <option>Select Service</option>
                                            <option>Dental Checkup</option>
                                            <option>Full Body Checkup</option>
                                            <option>ENT Checkup</option>
                                            <option>Heart Checkup</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
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
