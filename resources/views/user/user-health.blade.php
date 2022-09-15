@extends('user.layouts._master')

@section('extraCss')

@endsection

@section('content')


    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100 form-head">
            <h3 style="max-width: 90%; margin: auto" class="mt-3 text-center">Add Personal Health Information</h3>

            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="height" name="height" class="form-control form-control-lg" placeholder="" />
                            <label class="form-label">Height</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="weight" name="weight" class="form-control form-control-lg" placeholder="" />
                            <label class="form-label">Weight</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="text" id="blood_pressure" name="blood_pressure" class="form-control form-control-lg" placeholder="" />
                            <label class="form-label" >Lood Pressure</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="text" id="heart_rate" name="heart_rate" class="form-control form-control-lg" placeholder="" />
                            <label class="form-label">Heartbeat</label>
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-success">Add</button>
            </form>

        </div>
    </section>

@endsection
