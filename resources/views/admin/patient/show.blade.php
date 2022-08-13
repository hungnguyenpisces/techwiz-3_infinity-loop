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
        <div class="block-header">
            <h2>Patient Profile</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class=" card patient-profile">
                    <img src="assets/images/image-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="card">
                    <div class="header">
                        <h2>About Patient</h2>
                    </div>
                    <div class="body">
                        <strong>Name</strong>
                        <p>Will Smith</p>
                        <strong>Occupation</strong>
                        <p>UI UX Design</p>
                        <strong>Email ID</strong>
                        <p><a href="https://thememakker.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b0c121717550816120f133b12151d1455181416">[email&#160;protected]</a></p>
                        <strong>Phone</strong>
                        <p>+123 456 789</p>
                        <hr>
                        <strong>Address</strong>
                        <address>85 Bay Drive, New Port Richey, FL 34653</address>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="patient-profile.html#report">Biographyink</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="patient-profile.html#timeline">Timeline</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="report">
                                <div class="wrap-reset">
                                    <div class="mypost-list">
                                        <div class="post-box">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                        </div>
                                        <hr>
                                        <div class="post-box">
                                            <h4>General Report</h4>
                                            <div class="body p-l-0 p-r-0">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div>Blood Pressure</div>
                                                        <div class="progress m-b-20">
                                                            <div class="progress-bar bg-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>Heart Beat</div>
                                                        <div class="progress  m-b-20">
                                                            <div class="progress-bar bg-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>Haemoglobin</div>
                                                        <div class="progress  m-b-20">
                                                            <div class="progress-bar bg-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>Sugar</div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>Education</h4>
                                        <ul class="dis">
                                            <li>B.Com from Ski University</li>
                                            <li>In hac habitasse platea dictumst.</li>
                                            <li>In hac habitasse platea dictumst.</li>
                                            <li>Vivamus elementum semper nisi.</li>
                                            <li>Praesent ac sem eget est egestas volutpat.</li>
                                        </ul>
                                        <hr>
                                        <h4>Past Visit History</h4>
                                        <ul class="dis">
                                            <li>Integer tincidunt.</li>
                                            <li>Praesent vestibulum dapibus nibh.</li>
                                            <li>Integer tincidunt.</li>
                                            <li>Praesent vestibulum dapibus nibh.</li>
                                            <li>Integer tincidunt.</li>
                                            <li>Praesent vestibulum dapibus nibh.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="timeline">
                                <div class="timeline-body">
                                    <div class="timeline m-border">
                                        <div class="timeline-item">
                                            <div class="item-content">
                                                <div class="text-small">Just now</div>
                                                <p>Discharge.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-info">
                                            <div class="item-content">
                                                <div class="text-small">11:30</div>
                                                <p>Routine Checkup</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-warning border-l">
                                            <div class="item-content">
                                                <div class="text-small">10:30</div>
                                                <p>Operation </p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-warning">
                                            <div class="item-content">
                                                <div class="text-small">3 days ago</div>
                                                <p>Routine Checkup</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-danger">
                                            <div class="item-content">
                                                <div class="text--muted">Thu, 10 Mar</div>
                                                <p>Routine Checkup</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-info">
                                            <div class="item-content">
                                                <div class="text-small">Sat, 5 Mar</div>
                                                <p>Routine Checkup</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-danger">
                                            <div class="item-content">
                                                <div class="text-small">Sun, 11 Feb</div>
                                                <p>Blood checkup test</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-info">
                                            <div class="item-content">
                                                <div class="text-small">Thu, 17 Jan</div>
                                                <p>Admit patient ward no. 21</p>
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
    </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/bundles/libscripts.bundle.js"></script> 
<script>(function(){var js = "window['__CF$cv$params']={r:'738813f09b602390',m:'XgkA6f5WML9.gMGzWhgRcYxVh9I_h9KGhrXJi3FbmxE-1660127654-0-AemDgnUfxXtuyh2HFMBVC3Czbmuwj7uIc1NWaL8bR3DE1tLi9Rjh0C4uKV2n7YYOtyIXxj5BrPs+++waSZiIbts2BzoAFREjOvSqEqK6IlW5oU7XaRsyhkuXGNmQLGUVX86EFiSr3Lb3YK8+mKHQiTuz5JhyQ4nfIxoAEY1Rd073',s:[0x8a4769892e,0xdb671d52fb],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script>

<!-- end extraJs -->
@endsection