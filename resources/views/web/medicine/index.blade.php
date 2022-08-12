@extends('admin.layouts._master')

@section('title')
Admin
@endsection

@section('content')
<div class="container">
        <h2>Category manager</h2>
        <p>
            <a href="{{route('medicine.create')}}">Add new Category</a>
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
                <th>check_out_history_id</th>
                <th>details</th>
                <th>Action</th>
            </tr>
            @foreach($lsMed as $med)
                <tr>
                    <td>{{$med->check_out_history_id}}</td>
                    <td>{{$med->details}}</td>
                    <td>
                        <a class="btn btn-warning" href='{{route("medicine.edit", $med->id)}}'>Edit</a> |

                        <form method="post" action="{{route('medicine.destroy', $med->id)}}"
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