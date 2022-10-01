@extends('user.layouts._master')
@section('extraCss')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<style>
    .buttons {
        width: 900px;
        margin: 5px auto;
    }

    .action_btn {
        display: inline-block;
        width: calc(50% - 4px);
        margin: 5px auto;
    }
</style>

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
                        <p class="mb-0 h4"><strong class="mx-5">Hosptal:</strong>{{ $appointment-> hospital_name }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0 h4"><strong class="mx-5">Department:</strong>{{ $appointment-> department_name }}</p>
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
                    <p class="mb-0 h4"><strong class="mx-5">Doctor:</strong>Dr. {{ $appointment-> doctor_first_name }}</p>
                </div>
                <hr>
                <br>
                <br>
                <div class="text-center buttons">
                    <div class="col-sm-12 action_btn">
                        <a type="button" href="/user-appointment" class="btn btn-success action_btn">Back to list</a>

                        @if($appointment->status == 'Pending')
                            <a type="button"  class="btn btn-secondary action_btn" href="{{route("appointment.edit", $appointment->id)}}">Edit</a>
                        @endif
                        <form  method="post" action="{{route('appointment.destroy', $appointment->id)}}"
                               onsubmit='return confirm("Are you Sure ?")'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="Delete" class="btn btn-danger action_btn">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@section('extraJs')

@endsection
