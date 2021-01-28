@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Description</th>
        <th>Facebook</th>
        <th>User</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Del</th>
        @foreach($list_sub as $sub)
            <tr>
                <td>{{$sub->id}}</td>
                <td>{{$sub->name}}</td>
                <td>
                    <img style="width:40px;" src="{{$sub->avatar}}" alt="">
                </td>
                <td>{{$sub->description}}</td>
                <td>
                    <a style="color:blue;" target="_blank"  href="{{$sub->facebook}} " >
                    <span class="d-inline-block text-truncate" style="max-width: 50px;">
                            {{$sub->facebook}}
                    </span>
                    </a >
                </td>
                <td>
                    {{$sub->userId}}

                </td>
                <td class="status-style-{{$sub->status}}">
                    @if ($sub->status==STATUS_SUBJECT_ACTIVE)
                        Active
                    @else
                        UnActive
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
