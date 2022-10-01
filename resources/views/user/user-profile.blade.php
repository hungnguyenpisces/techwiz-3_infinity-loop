@extends('user.layouts._master')

@section('extraCss')

@endsection

@section('content')


<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://pickaface.net/gallery/avatar/20130319_083314_1174_admin.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{Auth::user()->first_name}}</h5>
                        <p class="text-muted mb-1">Full Stack Developer</p>
                        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                        <div class="d-flex justify-content-center mb-2">
                            <div class="button wow fadeInLeft" data-wow-delay=".7s">
                                <a href="/user-update-info" class="btn">Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Height</p>
                                <p class="mb-0">{{$healthIndex->height}} cm</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Weight</p>
                                <p class="mb-0">{{$healthIndex->weight}} kg</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Blood pressure</p>
                                <p class="mb-0">{{$healthIndex->blood_pressure}}</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p>Heartbeat</p>
                                <p class="mb-0">{{$healthIndex->heart_rate}}</p>
                            </li>
                            <div class="d-flex justify-content-center mb-2">
                                <div class="button wow fadeInLeft" data-wow-delay=".7s">
                                    <a href='{{route("healthIndex.edit" , $healthIndex ->id)}}' class="btn">Edit latest record</a>
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">First Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->first_name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Last Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->last_name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->phone}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gender</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->gender}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                               <!-- chart -->
                                <canvas id="chart" >
                                    
                                </canvas>
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
<script src="/assets/plugins/chartjs/Chart.bundle.min.js"></script>
<script src="/assets/bundles/libscripts.bundle.js"></script>

<script>
$(document).ready(function () {
  if (!sessionStorage.getItem("token")) {
    window.location.href = "/logout";
  } else {

    $.ajax({
      url: "/api/users/datachart",
      type: "GET",
      headers: {
        "Content-Type": "application/json",
        Authorization:
          "Bearer " +
          JSON.parse(sessionStorage.getItem("token")).access_token,
      },
      success: function (data) {
        console.log(data);
        //draw chart
        new Chart(
          document.getElementById("chart").getContext("2d"),
          (config = {
            type: "line",
            data: {
              labels: data.months,
              datasets: [
                {
                  label: "Height",
                  data: data.height,
                  borderColor: "rgba(0, 188, 212, 0.75)",
                  backgroundColor: "rgba(0, 188, 212, 0.3)",
                  pointBorderColor: "rgba(0, 188, 212, 0)",
                  pointBackgroundColor: "rgba(0, 188, 212, 0.9)",
                  pointBorderWidth: 1,
                },
                {
                  label: "Weight",
                  data: data.weight,
                  borderColor: "rgba(233, 30, 99, 0.75)",
                  backgroundColor: "rgba(233, 30, 99, 0.3)",
                  pointBorderColor: "rgba(233, 30, 99, 0)",
                  pointBackgroundColor: "rgba(233, 30, 99, 0.9)",
                  pointBorderWidth: 1,
                },
                {
                  label: "Blood pressure",
                  data: data.blood_pressure,
                borderColor: "rgba(156, 39, 176, 0.75)",
                backgroundColor: "rgba(156, 39, 176, 0.3)",
                pointBorderColor: "rgba(156, 39, 176, 0)",
                pointBackgroundColor: "rgba(156, 39, 176, 0.9)",
                pointBorderWidth: 1,
               
                },
                {
                  label: "Heart rate",
                  data: data.heart_rate,
                    borderColor: "rgba(255, 152, 0, 0.75)",
                    backgroundColor: "rgba(255, 152, 0, 0.3)",
                    pointBorderColor: "rgba(255, 152, 0, 0)",
                    pointBackgroundColor: "rgba(255, 152, 0, 0.9)",
                    pointBorderWidth: 1,

                  
                },
              ],
            },
            options: {
              responsive: true, legend: true, title: {
                display: true,
                text: 'Your health visualization'
                
              }
            },
          })
        );


      },


    });
  }
});
</script>
@endsection

