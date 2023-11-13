@extends('layouts.app')
@section('title', $user->name)

@section('body')
    <div class="p-5">
        <div class="text-center">
            <h4>Edit : {{ $user->name }}</h4>
        </div>
        <form action="{{ route('user.update', $user->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Notification Status</label>
                <select class="form-control" name="notification_switch">
                    <option value="1" {{ $user->notification_switch == '1' ? 'selected' : '' }}>On</option>
                    <option value="0" {{ $user->notification_switch == '0' ? 'selected' : '' }}>OFF</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPhoneNumber">Phone Number</label>
                <input name="phone_number" type="number" class="form-control" id="exampleInputPhoneNumber"
                    placeholder="Enter Phone Number" value="{{ $user->phone_number }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="btn btn-danger" style="margin-top:10px" href="{{ route('user.show', $user->id) }}">Cancel</a>
    </div>
@endsection
