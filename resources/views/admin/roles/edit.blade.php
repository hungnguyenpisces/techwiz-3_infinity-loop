@extends('admin.layouts._master')

@section('title')
Role Management
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
                        <h2 class="card-title">Edit roles</h2>
                        <div class="card-tools">
                            <a class="btn btn-success" href="{{ route('roles.index') }}"><i class="fas fa-angle-double-left"></i> Back To Role List</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/admin/roles/{{$role->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="tab-pane" id="settings">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input placeholder="Name" class="form-control" name="name" type="text" value="{{ old('name', $role->name)}}">

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="inputPermission" class="col-md-2 col-form-label">Permission</label>
                                        <div class="col-md-10">

                                            <div class="row">
                                                <?php
                                                $abc = "";
                                                $len = count($permission);
                                                ?>
                                                @foreach($permission as $key => $value)
                                                <?php
                                                if ($key === 0) {
                                                    echo '<div class="col-md-4">';
                                                }

                                                if ($abc != substr($value->name, 0, strpos($value->name, "-")) && $key === 0) {
                                                    $abc = substr($value->name, 0, strpos($value->name, "-"));

                                                    echo '<label>' . $abc . '</label><div class="block">';
                                                } else if ($abc != substr($value->name, 0, strpos($value->name, "-")) && $key !== 0) {
                                                    $abc = substr($value->name, 0, strpos($value->name, "-"));
                                                    echo '</div></div><div class="col-md-4">';
                                                    echo '<label>' . $abc . '</label><div class="block">';
                                                }
                                                ?>
                                                <input class="name" type="checkbox" name="permission[]" value="{{$value->id}}" {{in_array($value->id, $rolePermissions) ? 'checked' : ''}}>
                                                {{ $value->name }}
                                                <br />
                                                <?php
                                                if ($key === $len - 1) {
                                                    echo '</div></div>';
                                                }
                                                ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.tab-pane -->

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