@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notifications</h5>
                    <ul class="list-group list-group-flush">
                        @foreach ($notifications as $notification)
                            <li class="list-group-item">
                                @if(isset($notification['data']['content']['title']))
                                    <strong>{{ $notification['data']['content']['title'] }}</strong>
                                    {{ $notification['data']['content']['body'] }}
                                @endif
                            </li>
                        @endforeach
                    </ul>
                   <div class="mt-2">
                        {{ $notifications->links() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
