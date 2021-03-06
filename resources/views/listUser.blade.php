@extends('layout')
@section('content')
    <table  class="table table-hover style-table">
        <th>ID</th>
        <th>Full Name</th>
        <th>Avatar</th>
        <th>Birth Day</th>
        <th>Job</th>
        <th>Gender</th>
        <th>Role</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Del</th>
        <th>Detail</th>
        @foreach($list_user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullName}}</td>
                <td>
                    <img style="width:40px;" src="{{$user->avatar}}" alt="">
                </td>
                <td>{{date('d/m/y',$user->birthday)}}</td>
                <td style="max-width: 100px;">{{$user->job}}</td>
                <td>
                    @if($user->gender==1)
                        Male
                    @else
                        Female
                    @endif
                </td>
                <td>
                    @if($user->role==ROLE_USER_ADMIN)
                        Admin
                    @else
                        Course
                    @endif
                </td>
                <td class="status-style-{{$user->status}}">
                    @if($user->status==STATUS_USER_ACTIVE)
                        Active
                    @endif
                    @if($user->status==STATUS_USER_UNACTIVE)
                        Unactive
                    @endif
                    @if($user->status==STATUS_USER_LOCK)
                        Lock
                    @endif
                    @if($user->status==STATUS_USER_PENDING)
                        New
                    @endif
                </td>
                <td>
                    <a style="color: cornflowerblue" href="">Edit</a>
                </td>
                <td>
                    <a style="color: darkred" href="">Del</a>
                </td>
                <td>
                    <a style="color: cyan" href="/getUser/{{$user->id}}">Detail</a>
                </td>

            </tr>
        @endforeach
    </table>

@endsection
