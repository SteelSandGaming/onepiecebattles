@extends('layouts.app')

@section('title', 'Home - OnePieceBattles')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Welcome to OnePieceBattles</div>
            <div class="card-body">
                <h5 class="card-title">Your One Piece TCG Battle Platform</h5>
                <p class="card-text">
                    Join the adventure and battle with your favorite One Piece TCG cards!
                    Track your matches, build your decks, and compete with other players.
                </p>
                @guest
                    <div class="d-grid gap-2">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                    </div>
                @else
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-primary">View Your Profile</a>
                        <a href="#" class="btn btn-outline-primary">Start a New Battle</a>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection 