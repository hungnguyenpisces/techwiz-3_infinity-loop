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

<section class="content profile-page">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 p-l-0 p-r-0">
                    <section class="boxs-simple">
                        <div class="profile-header">
                            <div class="profile_info">
                                <div class="profile-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
                                <h4 class="mb-0"><strong>Dr. John</strong> Smith</h4>
                                <span class="text-muted col-white">Dentist</span>
                                <div class="mt-10">
                                    <button class="btn btn-raised btn-primary bg-blush btn-sm">Follow</button>
                                    <button class="btn btn-raised btn-primary bg-green btn-sm">Message</button>
                                </div>
                                <p class="social-icon">
                                    <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i
                                            class="zmdi zmdi-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i
                                            class="zmdi zmdi-twitter"></i></a>
                                    <a title="Dribbble" href="javascript:void(0);"><i
                                            class="zmdi zmdi-dribbble"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i
                                            class="zmdi zmdi-instagram "></i></a>
                                    <a title="Pinterest" href="javascript:void(0);"><i
                                            class="zmdi zmdi-pinterest "></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="profile-sub-header">
                            <div class="box-list">
                                <ul class="text-center">
                                    <li> <a href="mail-inbox.html" class=""><i class="zmdi zmdi-email"></i>
                                            <p>My Inbox</p>
                                        </a> </li>
                                    <li> <a href="javascript:void(0);" class=""><i class="zmdi zmdi-camera"></i>
                                            <p>Gallery</p>
                                        </a> </li>
                                    <li> <a href="javascript:void(0);"><i class="zmdi zmdi-attachment"></i>
                                            <p>Collections</p>
                                        </a> </li>
                                    <li> <a href="javascript:void(0);"><i class="zmdi zmdi-format-subject"></i>
                                            <p>Tasks</p>
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>About Me</h2>
                        </div>
                        <div class="body">
                            <p class="text-default">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <small>Designer <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>My Portfolio Status</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled">
                                <li>
                                    <div>Behance</div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Themeforest</div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Dribbble</div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Pinterest</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">

                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="profile.html#mypost">My Post</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="profile.html#timeline">Activities</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="profile.html#usersettings">Setting</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane in active" id="mypost">
                                    <div class="wrap-reset">
                                        <div class="mypost-form">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize"
                                                        placeholder="Please type what you want..."></textarea>
                                                </div>
                                            </div>
                                            <div class="post-toolbar-b"> <a href="javascript:void(0);"
                                                    tooltip="Add File" class="btn btn-raised btn-default btn-sm"><i
                                                        class="zmdi zmdi-attachment"></i></a> <a
                                                    href="javascript:void(0);" tooltip="Add Image"
                                                    class="btn btn-raised btn-default btn-sm"><i
                                                        class="zmdi zmdi-camera"></i></a> <a href="javascript:void(0);"
                                                    class="pull-right btn btn-raised btn-success btn-sm"
                                                    tooltip="Post it!">Post</a> </div>
                                        </div>
                                        <div class="mypost-list">
                                            <div class="post-box">
                                                <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 3
                                                    minutes ago</span>
                                                <div class="post-img"><img src="http://via.placeholder.com/1000x400"
                                                        class="img-fluid" alt /></div>
                                                <div>
                                                    <h5>Lorem Ipsum is simply dummy text of the printing</h5>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, </p>
                                                    <p> <a href="javascript:void(0);"
                                                            class="btn btn-raised btn-info btn-sm"><i
                                                                class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-raised bg-soundcloud btn-sm"><i
                                                                class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box">
                                                <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 23
                                                    minutes ago</span>
                                                <div class="post-img"><img src="http://via.placeholder.com/1000x400"
                                                        class="img-fluid" alt /></div>
                                                <div>
                                                    <h5>Lorem Ipsum is simply dummy text of the printing</h5>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, </p>
                                                    <p> <a href="javascript:void(0);"
                                                            class="btn btn-raised btn-info btn-sm"><i
                                                                class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-raised bg-soundcloud btn-sm"><i
                                                                class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box">
                                                <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 45
                                                    minutes ago</span>
                                                <div class="post-img"><img src="http://via.placeholder.com/1000x400"
                                                        class="img-fluid" alt /></div>
                                                <div>
                                                    <h5>Lorem Ipsum is simply dummy text of the printing</h5>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, </p>
                                                    <p> <a href="javascript:void(0);"
                                                            class="btn btn-raised btn-info btn-sm"><i
                                                                class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-raised bg-soundcloud btn-sm"><i
                                                                class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="text-center"> <a href="javascript:void(0);"
                                                    class="btn btn-raised btn-default">Load More …</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="timeline">
                                    <div class="timeline-body">
                                        <div class="timeline m-border">
                                            <div class="timeline-item">
                                                <div class="item-content">
                                                    <div class="text-small">Just now</div>
                                                    <p>Finished task #features 4.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">11:30</div>
                                                    <p>@Jessi retwit your post</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning border-l">
                                                <div class="item-content">
                                                    <div class="text-small">10:30</div>
                                                    <p>Call to customer #Jacob and discuss the detail.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning">
                                                <div class="item-content">
                                                    <div class="text-small">3 days ago</div>
                                                    <p>Jessi commented your post.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text--muted">Thu, 10 Mar</div>
                                                    <p>Trip to the moon</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">Sat, 5 Mar</div>
                                                    <p>Prepare for presentation</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text-small">Sun, 11 Feb</div>
                                                    <p>Jessi assign you a task #Mockup Design.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">Thu, 17 Jan</div>
                                                    <p>Follow up to close deal</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="item-content">
                                                    <div class="text-small">Just now</div>
                                                    <p>Finished task #features 4.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">11:30</div>
                                                    <p>@Jessi retwit your post</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning border-l">
                                                <div class="item-content">
                                                    <div class="text-small">10:30</div>
                                                    <p>Call to customer #Jacob and discuss the detail.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning">
                                                <div class="item-content">
                                                    <div class="text-small">3 days ago</div>
                                                    <p>Jessi commented your post.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="usersettings">
                                    <div class="body">
                                        <h2 class="card-inside-title">Security Settings</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control"
                                                            placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control"
                                                            placeholder="New Password">
                                                    </div>
                                                </div>
                                                <button class="btn btn-raised btn-success btn-sm">Save Changes</button>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Account Settings</h2>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"
                                                            placeholder="First Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize"
                                                            placeholder="Address Line 1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="City">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="E-mail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Country">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group checkbox">
                                                    <label>
                                                        <input name="optionsCheckboxes" type="checkbox">
                                                        <span class="checkbox-material"><span
                                                                class="check"></span></span> Profile Visibility For
                                                        Everyone </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-raised btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
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

<script>(function () { var js = "window['__CF$cv$params']={r:'738813ed9e1c2390',m:'4OeW1l0c3Z2r2ZhC5m3e7oEx2uVk7QpwLQ_GRZ29I00-1660127654-0-AXfiL4WSSxJt+rgva/mmTFPNcpvXk1C5hV+LlTAhIwTbPV1O8g9Z1397LuXjcAh6IAa4weA8/x+ojiy8RViUpCEkRDPcyCwY+vm7nZoUzPO5ENIvCLi1tEjlEstaQK4BIuPyuxC788rEFr9nBGrKOuqHF2ouvVacZ10u5IwPSgdE',s:[0x59c242d718,0xce242eb72a],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.nonce = ''; _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>

<!-- end extraJs -->
@endsection