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

        <form method="post" action="{{route('medicine.update', $med->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>check_out_history_id</label>
                <input class="form-control" type="text" name="check_out_history_id" value="{{old('check_out_history_id', $med->check_out_history_id) }}"/>
            </div>
            <div class="form-group">
                <label>details</label>
                <input class="form-control" type="text" name="details" value="{{old('details', $med->details) }}"/>
            </div>
            <div class="form-group py-1">
                <input type="submit" class="btn btn-primary" value="Save"/>
            </div>
        </form>
    </div>


@endsection