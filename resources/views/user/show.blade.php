@extends('layouts.app')
@section('title', $user->name)

@section('body')
    <div class="p-5">
        <h6>
            <a href="{{ route('user.index') }}">< Back</a>
        </h6>
        <h4>Name {{ $user->name }}</h4>
        <h6>Settings : <a href="{{ route('user.edit', $user->id) }}">Update Details</a></h6>
        <h6>Notification Icon (0)</h6>
    </div>
@endsection
