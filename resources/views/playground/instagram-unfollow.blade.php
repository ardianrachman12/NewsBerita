@extends('layouts.app')
@section('content')
    <div class="main-page container py-5">
        @include('layouts.alert')
        <div class="">
            <h1>Unfollowers</h1>
            <form action="{{ route('check-unfollower') }}" method="POST">
                @csrf
                <label for="followers">JSON Followers:</label>
                <textarea class="form-control" name="followers" id="followers" rows="10" cols="50"></textarea>
            
                <label for="following">JSON Following:</label>
                <textarea class="form-control" name="following" id="following" rows="10" cols="50"></textarea>
            
                <button class="btn btn-success mt-2" type="submit">Cek Unfollowers</button>
            </form>
        </div>
    </div>
@endsection