@extends('admin.layouts._master')

@section('title')
Admin
@endsection

@section('content')
<div class="container">
        <h2>Category manager</h2>
        <p>
            <a href="{{route('healthindex.create')}}">Add new Category</a>
        </p>

        <div class="flash-message">

            @foreach(['danger', 'success', 'warning', 'info'] as $type)
                @if(\Illuminate\Support\Facades\Session::has($type))
                    <p class="alert alert-{{$type}}">
                        {{\Illuminate\Support\Facades\Session::get($type)}}
                    </p>
                @endif
                @endforeach

        </div>
        <table class="table">
            <tr>
                <th>users_id</th>
                <th>height</th>
                <th>weight</th>
                <th>heart_rate</th>
                <th>blood_pressure</th>
                <th>Action</th>
            </tr>
            @foreach($lsHe as $heal)
                <tr>
                    <td>{{$heal->users_id}}</td>
                    <td>{{$heal->height}}</td>
                    <td>{{$heal->weight}}</td>
                    <td>{{$heal->heart_rate}}</td>
                    <td>{{$heal->blood_pressure}}</td>
                    <td>
                        <a class="btn btn-warning" href='{{route("healthindex.edit", $heal->id)}}'>Edit</a> |

                        <form method="post" action="{{route('healthindex.destroy', $heal->id)}}"
                            onsubmit='return confirm("Sure ?")'>
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection