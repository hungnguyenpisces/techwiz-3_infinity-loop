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
                        <h2 class="card-title">Edit User</h2>
                        <div class="card-tools">
                            <a class="btn btn-success" href="{{ route('users.index') }}"><i class="fa fa-angle-double-left"></i> Back To User List</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping-firstname">First name:</span>
                                            </div>
                                            <input type="text" class="form-control border border-success pl-2" name="first_name" placeholder="Enter first name" value='{{ old("first_name", $user->first_name) }}' aria-describedby="addon-wrapping-firstname" >
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
                                            <input type="text" class="form-control border border-success pl-2" name="last_name" placeholder="Enter last name" value='{{ old("last_name", $user->last_name) }}' aria-describedby="addon-wrapping-lastname" >
                                            @error('last_name')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text pr-5" id="addon-wrapping-email">Email:</span>
                                            </div>
                                            <input type="text" class="form-control border border-success pl-2" name="email" placeholder="Enter email" value='{{ old("email", $user->email) }}' aria-describedby="addon-wrapping-email" >
                                            @error('email')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping-password">Password:</span>
                                            </div>
                                            <input type="password" class="form-control border border-success pl-2" name="password" placeholder="Enter Password" aria-describedby="addon-wrapping-password" >
                                            @error('password')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping-pwdconfirm">Confirm Password:</span>
                                            </div>
                                            <input type="password" class="form-control border border-success pl-2" name="confirm-password" placeholder="Confirm Password" aria-describedby="addon-wrapping-pwdconfirm" >
                                            @error('password')
                                            <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Role:</strong>
                                        <br>
                                        @foreach($roles as $key => $role)
                                        <input class="name" type="checkbox" name="roles[]" value="{{$key}}" {{in_array($role, $userRole) ? 'checked' : ''}}>
                                        {{ $role }}
                                        <br />
                                        @endforeach
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