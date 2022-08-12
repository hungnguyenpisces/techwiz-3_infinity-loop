@extends('admin.layouts._master')

@section('title')
Admin
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- 
        <div class="block-header">
        </div> -->
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h2>Permission Management</h2>
                                @role('Super-Admin')
                                <button type="button" class="btn btn-success btn-create" data-toggle="modal" data-target="#PermissionModal">
                                    Add Permission
                                </button>
                                @endrole
                            </div>
                            <div class="col-6 text-center">
                                @foreach(['danger', 'success', 'warning', 'info'] as $type)
                                @if(Session::has($type))
                                <p class="alert alert-{{$type}}">
                                    {{Session::get($type)}}
                                </p>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="permission_table" class="table table-sm table-bordered table-striped table-hover data-table">
                            <thead>
                                <tr class="bg-blue text-center">
                                    <th width="50px">No</th>
                                    <th>Name</th>
                                    <th width="200px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $key => $permission)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <form action="{{ route('permissions.destroy',$permission->id) }}" method="POST">
                                            @role('Super-Admin')
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                            @endrole
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            {{ $permissions->links() }}
        </div>

    </div>
</section>
<!-- Modal UpadateOrCreate Permission -->
<div class="modal fade" id="PermissionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add permission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('permissions.store')}}" id="permissionForm">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Enter permission:</span>
                        </div>
                        <input type="text" class="form-control border border-success pl-2" name="name" placeholder="exam-permission" aria-label="permission" aria-describedby="addon-wrapping" required>
                        @error('name')
                        <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection