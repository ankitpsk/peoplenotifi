@extends('layouts.app')
@section('title', $user->name)

@section('body')
    <div class="p-5"  >
        <h1>{{$user->name}}</h1>
    </div>
@endsection
