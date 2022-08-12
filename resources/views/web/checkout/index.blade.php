@extends('admin.layouts._master')

@section('title')
Admin
@endsection

@section('content')
<div class="container">
        <h2>Category manager</h2>
        <p>
            <a href="{{route('checkouthistory.create')}}">Add new Category</a>
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
                <th>department_id</th>
                <th>symptoms</th>
                <th>conclusion</th>
                <th>created_by</th>
                <th>doctor_id</th>
                <th>Action</th>
            </tr>
            @foreach($lsCoh as $coh)
                <tr>
                    <td>{{$coh->users_id}}</td>
                    <td>{{$coh->department_id}}</td>
                    <td>{{$coh->symptoms}}</td>
                    <td>{{$coh->conclusion}}</td>
                    <td>{{$coh->created_by}}</td>
                    <td>{{$coh->doctor_id}}</td>
                    <td>
                        <a class="btn btn-warning" href='{{route("checkouthistory.edit", $coh->id)}}'>Edit</a> |

                        <form method="post" action="{{route('checkouthistory.destroy', $coh->id)}}"
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