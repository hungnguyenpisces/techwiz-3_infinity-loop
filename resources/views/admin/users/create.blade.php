@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<style>
    [type="checkbox"]:not(:checked),
    [type="checkbox"]:checked {
        position: relative;
        left: 0;
        opacity: 100;
    }
</style>
<!-- end extra css -->
@endsection



@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">

            <!-- general form elements -->
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h2 class="card-title">Create New User</h2>
                        <div class="card-tools">
                            <a class="btn btn-success" href="{{ route('users.index') }}"><i class="fa fa-angle-double-left"></i> Back To User List</a>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <!-- return message -->

                                <div class="col-md-6">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping-firstname">First name:</span>
                                            </div>
                                            <input type="text" class="form-control border border-success pl-2" name="first_name" placeholder="Enter first name" value='{{ old("first_name") }}' aria-describedby="addon-wrapping-firstname" required>
                                            @error('first_name')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping-lastname">Last name:</span>
                                            </div>
                                            <input type="text" class="form-control border border-success pl-2" name="last_name" placeholder="Enter last name" value='{{ old("last_name") }}' aria-describedby="addon-wrapping-lastname" required>
                                            @error('last_name')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping-lastname">Username:</span>
                                            </div>
                                            <input type="text" class="form-control border border-success pl-2" name="username" placeholder="Enter your username" value='{{ old("username") }}' aria-describedby="addon-wrapping-lastname" required>
                                            @error('username')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text pr-5" id="addon-wrapping-email">Email:</span>
                                            </div>
                                            <input type="text" class="form-control border border-success pl-2" name="email" placeholder="Enter email" value='{{ old("email") }}' aria-describedby="addon-wrapping-email" required>
                                            @error('email')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text pr-5" id="addon-wrapping-phone">Phone:</span>
                                            </div>
                                            <input type="text" class="form-control border border-success pl-2" name="phone" placeholder="Enter phone number" value='{{ old("phone") }}' aria-describedby="addon-wrapping-email" required>
                                            @error('phone')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text pr-5" id="addon-wrapping-hospital">Hospital</span>
                                                <select name="hospital_id" class="form-control border-success pl-2 form-select show-tick border w-100" required>
                                                @if(Auth::user()->hasRole('Super-Admin') && Auth::user()->hospital_id != null)
                                                    @foreach($hospitals as $hospital)
                                                        @if(Auth::user()->hospital_id == $hospital->id)
                                                            <option value="{{ $hospital->id }}" selected disabled>{{ $hospital->name }}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @foreach($hospitals as $hospital)
                                                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Role:</strong>
                                        <br>
                                        @if (Auth::user()->hasRole('Super-Admin') && Auth::user()->hospital_id != null)
                                            @foreach($roles as $key => $role)
                                                @if($key != 'Super-Admin')
                                                    <label class="mr-3">
                                                        <input type="checkbox" name="roles[]" value="{{$key}}" class="mr-1">
                                                        {{$role}}
                                                    </label>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($roles as $key => $role)
                                                <label class="mr-3">
                                                    <input type="checkbox" name="roles[]" value="{{$key}}" class="mr-1">
                                                    {{$role}}
                                                </label>
                                            @endforeach
                                        @endif
                                        

                                        <!-- @foreach($roles as $key => $role)
                                        <input class="name" type="checkbox" name="roles[]" value="{{$key}}">
                                        {{ $role }}
                                        <br />
                                        @endforeach -->
                                        <span class="text-danger">{{ $errors->first('roles') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->

<!-- chỗ này để import thêm file js nếu cần thiết -->

<!-- end extraJs -->
@endsection