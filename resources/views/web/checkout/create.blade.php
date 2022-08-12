@extends('admin.layouts._master')

@section('title')
Admin
@endsection

@section('content')
 <div class="container">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    <p>{{$err}}</p>
                @endforeach
            </div>
        @endif

        <form method="post" action="{{route('checkouthistory.store')}}">
            @csrf
            <div class="form-group">
                <label>users_id</label>
                <input  class="form-control" type="text" name="users_id" value="{{old('users_id')}}"/>
            </div>
            <div class="form-group">
                <label>department_id</label>
                <input  class="form-control" type="text" name="department_id" value="{{old('department_id')}}"/>
            </div>
            <div class="form-group">
                <label>symptoms</label>
                <input  class="form-control" type="text" name="symptoms" value="{{old('symptoms')}}"/>
            </div>
            <div class="form-group">
                <label>conclusion</label>
                <input  class="form-control" type="text" name="conclusion" value="{{old('conclusion')}}"/>
            </div>
            <div class="form-group">
                <label>created_by</label>
                <input  class="form-control" type="text" name="created_by" value="{{old('created_by')}}"/>
            </div>
            <div class="form-group">
                <label>doctor_id</label>
                <input  class="form-control" type="text" name="doctor_id" value="{{old('doctor_id')}}"/>
            </div>
            <div class="form-group py-1">
                <input type="submit" class="btn btn-primary" value="Save"/>
            </div>
        </form>
    </div>


@endsection