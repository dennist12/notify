@extends('layouts.app')

@section('content')
    <div class="container">
       
        <div class="row">
            <div class="col">
                <h1 >Notifications</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <ul class="list-group list-group-flush">
                    @foreach ($notifications as $notification)
                        <li class="list-group-item">{{ $notification['data'] }}</li>
                    @endforeach
                </ul>
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $notifications->links() }}
            </div>
        </div>
    </div>
@endsection
