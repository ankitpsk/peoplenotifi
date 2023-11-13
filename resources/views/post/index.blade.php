@extends('layouts.app')
@section('title', 'Post List')
@section('body')
<div>
    <div class="p-5 pt-0" style="padding-top:5px !important">
        <a class="btn btn-warning" style="margin-bottom:10px" href="/">Home</a>
        <a class="btn btn-success" style="margin-bottom:10px" href="{{ route('post.create') }}">Add New Post</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Post ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Text</th>
                    <th scope="col">Expire Time</th>
                    <th scope="col">Users</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr scope="row">
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->type }}</td>
                        <td>{{ $post->short_text }}</td>
                        <td>{{ $post->expire_at}}</td>
                        <td>User List</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
