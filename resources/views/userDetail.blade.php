@extends('layout')
@section('content')
    <td><h1>Information of {{$user->fullName}}</h1></td>

    <div class="deltail">

        <div class="left">
            <div>
                <b>ID:</b>
                <th>{{$user->id}}</th>
            </div>
            <div>
                <b>Full Name : </b>
                {{$user->fullName}}
            </div>

            <div>
                <b>Facebook : </b>
                <a style="color:blue;" target="_blank" href="{{$user->facebook}} ">

                    {{$user->facebook}}

                </a>
            </div>
            <div>
                <b>Birthday :</b>
                {{date('d/m/y',$user->birthday)}}
            </div>
            <div>
                <b> Job: </b>
                <td style="max-width: 100px;">{{$user->job}}</td>
            </div>
            <div>
                <b>Phone Number : </b>
                {{$user->phoneNumber}}
            </div>
            <div>
                <b>Gender :</b>
                @if($user->gender==1)
                    Male
                @else
                    Female
                @endif
            </div>
            <div>
                <b>Role :</b>
                @if($user->role==ROLE_USER_ADMIN)
                    Admin
                @else
                    Course
                @endif
            </div>
            <div class="status-style-{{$user->status}}">
                <b style="color: black">Status : </b>
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
            </div>
        </div>
        <div class="right">
            <img class="style-img-deltail" src="{{$user->avatar}}" alt="">
        </div>
    </div>

@endsection
