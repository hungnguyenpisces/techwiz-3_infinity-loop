@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<link rel="stylesheet" href="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.css" />
<!-- end extra css -->
@endsection


@section('content')

<section class="content page-calendar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-3 col-xl-3">
        <div class="card m-t-20" style="overflow: hidden;">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#cb-hospital" id="f-hospital"><i class="zmdi zmdi-hospital"></i> HOSPITAL</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cb-department" id="f-department"><i class="zmdi zmdi-widgets"></i> DEPARTMENT</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cb-doctor" id="f-"><i class="zmdi zmdi-account-add"></i> DOCTOR</a></li>
          </ul>
          <div class="body" id="filter-data" style="height: 900px; overflow: auto;">

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane in active" id="cb-hospital">
                <div class="checkbox">
                  <input id="hospital-all" type="checkbox" class="form-check-input" checked>
                  <label class="form-check-label" for="hospital-all">All</label>
                </div>

              </div>
              <div role="tabpanel" class="tab-pane" id="cb-department">
                <div class="checkbox">
                  <input id="department-all" type="checkbox" class="form-check-input" checked>
                  <label class="form-check-label" for="department-all">All</label>
                </div>

              </div>
              <div role="tabpanel" class="tab-pane" id="cb-doctor">
                <div class="checkbox">
                  <input id="doctor-all" type="checkbox" class="form-check-input" checked>
                  <label class="form-check-label" for="doctor-all">All</label>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-9 col-xl-9">
        <div class="card m-t-20">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" id="c-day">DAILY</a></li>
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" id="c-week">WEEKLY</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" id="c-month">MONTHLY</a></li>
          </ul>
          <div class="body">
            <div class="m-b-10">
              <button class="btn btn-raised btn-success btn-sm m-r-0 m-t-0 m-l-5" id="c-today">Today
              </button>
              <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0 m-l-5" id="c-prev">Prev
              </button>
              <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0 m-l-5" id="c-next">Next
              </button>
              <div class="text-center">
                <h5 id="rangeView"></h5>
              </div>
            </div>
            <div id="calendar" style="height: 800px"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->
<script src="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.js"></script>
<script src="/assets/js/pages/calendar/calendar.js"></script>
<!-- end extraJs -->
@endsection