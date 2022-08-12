@extends('admin.layouts._master')

@section('title')
<title>:: Hospital Admin ::</title>
@endsection

@section('content')


<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Doctor Management</h2>
            <div class="card-tools">
                @can('doctor-create')
                <a class="btn btn-success" href="{{ route('doctor.create') }}"><i class="fas fa-plus-square"></i>Add Doctor</a>
                @endcan
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered">
                <tr class="bg-blue text-center">
                    <th width="50px">No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th width="200px">Action</th>
                </tr>
                @foreach ($lsDoc as $key => $doc)
                <tr>
                    <td class="text-center">{{ ++$key }}</td>
                    <td>{{ $doc->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-center">
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                    </td>
                    <td class="text-center">
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            <a class="btn btn-sm btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                            @can('user-edit')
                            <a class="btn btn-sm btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            @endcan
                            @can('user-delete')
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            @endcan
                        </form>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection