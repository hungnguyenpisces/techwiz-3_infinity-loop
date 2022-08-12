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

        <form method="post" action="{{route('healthindex.update', $heal->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>users_id</label>
                <input  class="form-control" type="text" name="users_id" value="{{old('users_id',$heal->users_id)}}"/>
            </div>
            <div class="form-group">
                <label>height</label>
                <input  class="form-control" type="text" name="height" value="{{old('height',$heal->height)}}"/>
            </div>
            <div class="form-group">
                <label>weight</label>
                <input  class="form-control" type="text" name="weight" value="{{old('weight',$heal->weight)}}"/>
            </div>
            <div class="form-group">
                <label>heart_rate</label>
                <input  class="form-control" type="text" name="heart_rate" value="{{old('heart_rate',$heal->heart_rate)}}"/>
            </div>
            <div class="form-group">
                <label>blood_pressure</label>
                <input  class="form-control" type="text" name="blood_pressure" value="{{old('blood_pressure',$heal->blood_pressure)}}"/>
            </div>
            <div class="form-group py-1">
                <input type="submit" class="btn btn-primary" value="Save"/>
            </div>
        </form>
    </div>


@endsection