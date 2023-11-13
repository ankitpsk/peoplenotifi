@extends('layouts.app')
@section('title', 'Users List')

@section('body')
<div class="p-5"  >
    <table class="table-auto">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Notification Count</th>
                <th>Explore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number ?? 'N/A' }}</td>
                    <td>0</td>
                    <td><a href="{{ route('user.show',$user->id) }}">view</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
