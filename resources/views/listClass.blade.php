@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Subject</th>
        <th>User</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Del</th>
        @foreach($list_class as $class)
            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->name}}</td>
                <td>
                    <img style="width:40px;" src="{{$class->avatar}}" alt="">
                </td>
                <td>
                    {{$class->subjectId}}
                </td>
                <td>
                  {{$class->userId}}
                </td>
                <td class="status-style-{{$class->status}}">
                    @if($class->status==STATUS_CLASS_ACTIVE)
                        Active
                    @endif
                    @if($class->status==STATUS_CLASS_UNACTIVE)
                        Unactive
                    @endif
                    @if($class->status==STATUS_CLASS_REGISTERING)
                        Registering
                    @endif

                </td>
                <td>
                    <a style="color: cornflowerblue" href="">Edit</a>
                </td>
                <td>
                    <a style="color: darkred" href="">Del</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
