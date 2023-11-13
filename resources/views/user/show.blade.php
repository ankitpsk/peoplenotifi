@extends('layouts.app')
@section('title', $user->name)

@section('body')
    <div class="p-5">
        <h6>
            <a href="{{ route('user.index') }}">< Back</a>
        </h6>
        <h4>Name {{ $user->name }}</h4>
        <h6>Settings : <a href="{{ route('user.edit', $user->id) }}">Update Details</a></h6>
        <h6 id="notification" title="click to view">Notification Icon ({{count($user->notifications->where('checked_at',null))}})</h6>
    </div>
    <div style="width: 50%;margin-left:50px;" id="notificationBlock">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Message</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->notifications as $notify)
                    <tr scope="row">
                        <td>{{ $notify->post->type }}</td>
                        <td>{{ $notify->post->short_text }}</td>
                        <td>{{ $notify->post->created_at  }}</td>
                        <td>
                            @if ($notify->checked_at == null)
                                <a href="/marknotification/{{$notify->id}}">Mark as Read</a>
                            @else
                            Read
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $("#notification").on( "click", function() {
            $("#notificationBlock").toggleClass('show');
        });
    </script>
@endsection
