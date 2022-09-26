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

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Users Management</h2>
                        <div class="card-tools">
                            @can('user-create')
                            <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fas fa-plus-square"></i> Add User</a>
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
                                <th width="250px">Action</th>
                            </tr>
                            @foreach ($users as $key => $user)
                            <tr>
                                <td class="text-center">{{ ++$key }}</td>
                                <td>{{ $user->name }}</td>
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
                                        <a class="btn btn-sm btn-warning" href="{{ route('users.block',$user->id) }}">{{$user->activated?"B":"Unb"}}lock</a>
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
            {{ $users->links() }}
        </div>
    </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->

<!-- chỗ này để import thêm file js nếu cần thiết -->

<!-- end extraJs -->
@endsection