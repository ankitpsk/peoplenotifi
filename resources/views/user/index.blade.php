@extends('layouts.app')
@section('title', 'Users List')
@section('body')
<div>
    <div class="p-5 pt-0" style="padding-top:5px !important">
        <a class="btn btn-warning" style="margin-bottom:10px" href="/">Home</a>
        <a class="btn btn-success" style="margin-bottom:10px" href="{{ route('user.create') }}">Add New User</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Notification Status/Count</th>
                    <th scope="col">Explore</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr scope="row">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number ?? 'N/A' }}</td>
                        <td>{{$user->notification_switch == 1 ? 'On' : 'Off'}} / {{ count($user->notifications->where('checked_at',null))}}</td>
                        <td><a href="{{ route('user.show',$user->id) }}">view</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
