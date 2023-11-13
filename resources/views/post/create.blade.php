@extends('layouts.app')
@section('title', 'Create User')

@section('body')
    <div class="p-5">
        <div class="text-center">
            <h4>New Post</h4>
        </div>

        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Message type</label>
                <select class="form-control" name="type" required>
                    <option value="" >Select Type</option>
                    @foreach ($message_type as $type)
                        <option value="{{$type}}" >{{$type}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="shorttext">Short Text</label>
                <input name="short_text" type="name" class="form-control" id="shorttext" aria-describedby="emailHelp"
                    placeholder="Short Text" required>
            </div>

            <div class="form-group">
                <label for="dateTimeLocal">Expire At</label>
                <input name="phone_number" type="datetime-local" class="form-control" id="dateTimeLocal" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="btn btn-danger" style="margin-top:10px" href="{{ route('post.index') }}">Cancel</a>
    </div>
@endsection
