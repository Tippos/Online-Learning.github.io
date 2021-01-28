@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Full Name</th>
        <th>Avatar</th>
        <th>Birth Day</th>
        <th>Job</th>
        <th>Phone Number</th>
        <th>Facebook</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Role</th>
        <th>Status</th>
        <th>Edit</th>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullName}}</td>
                <td>
                    <img style="width:40px;" src="{{$user->avatar}}" alt="">
                </td>
                <td>{{date('d/m/y',$user->birthday)}}</td>
                <td style="max-width: 100px;">{{$user->job}}</td>
                <td>{{$user->phoneNumber}}</td>
                <td>
                    <a style="color:blue;" target="_blank"  href="{{$user->facebook}} " >
                    <span class="d-inline-block text-truncate" style="max-width: 50px;">
                            {{$user->facebook}}
                    </span>
                    </a >
                </td>
                <td>
                    @if($user->gender==1)
                        Male
                    @else
                        Female
                    @endif
                </td>
                <td style="max-width: 100px;">{{$user->country}}</td>
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
            </tr>
    </table>

@endsection
