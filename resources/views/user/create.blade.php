@extends('layouts.app')
@section('title', 'Create User')

@section('body')
    <div class="p-5">
        <div class="text-center">
            <h4>Create New User</h4>
        </div>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input name="name" type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                    placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPhoneNumber">Phone Number</label>
                <input name="phone_number" type="number" class="form-control" id="exampleInputPhoneNumber"
                    placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label>Notification Status</label>
                <select class="form-control" name="notification_switch">
                    <option value="1" selected>On</option>
                    <option value="0">OFF</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="btn btn-danger" style="margin-top:10px" href="{{ route('user.index') }}">Cancel</a>
    </div>
@endsection
