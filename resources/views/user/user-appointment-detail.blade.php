@extends('user.layouts._master')
@section('extraCss')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/user-profile">User</a></li>
                        <li class="breadcrumb-item"><a href="/user-appointment">Appointment</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointment detail</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <h2 class="text-center mb-5">Your appointment details</h2>
            <div class="container">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0 h4"><strong class="mx-5">Hosptal:</strong>{{ $appointment-> hospital_name }}
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 h4"><strong
                                    class="mx-5">Department:</strong>{{ $appointment-> department_name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0 h4"><strong class="mx-5">Date:</strong>{{ $appointment-> date }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 h4"><strong class="mx-5">Time:</strong>{{ $appointment-> time }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <p class="mb-0 h4"><strong
                                class="mx-5">Doctor:</strong>Dr. {{ $appointment-> doctor_first_name }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <p class="mb-0 h4"><strong class="mx-5">Message:</strong>{{ $appointment-> self_check_symptom }}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="mb-0 h4"><strong class="mx-5">Address:</strong>{{ $appointment-> location }}</p>
                </div>
                <hr>
                <div class="row">
                    <p class="mb-0 h4"><strong class="mx-5">Status:</strong>
                        @if($appointment->status == 'Pending')
                            <span class="text-bg-warning badge badge-warning">{{ $appointment->status }}</span>
                            <span
                                style="font-size: 13px; font-style: italic">Your appointment is being processed.</span>
                        @elseif($appointment->status == 'Accepted')
                            <span class="text-bg-success badge badge-success">{{ $appointment->status }}</span>
                        @elseif($appointment->status == 'Cancelled')
                            <span class="text-bg-danger badge badge-danger">{{ $appointment->status }}</span>
                        @else
                            <span class="text-bg-primary badge badge-primary">{{ $appointment->status }}</span>
                        @endif
                    </p>
                </div>
                <hr>
                <br>
                <br>
                <div class="text-center">
                    <a type="button" href="/user-appointment" class="btn btn-success">Back to list</a>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('extraJs')

@endsection
