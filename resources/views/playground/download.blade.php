@extends('layouts.app')
@section('content')
    <div class="main-page">
        <div class="container py-4 mx-auto">
            <div class="card" style="width: 30rem;">
                <img src="{{ $response['thumb'] }}" class="card-img-top" alt="thumbnail">
                <div class="card-body">
                    <h5 class="card-title">{{ $response['title'] }}</h5>
                    <p class="card-text">Author : {{ $response['author'] }}</p>
                    <div class="d-inline-block">
                        <a href="{{ $response['link'] }}" target="_blank" class="btn btn-primary">Download</a>
                        <a href="/download" class="btn btn-warning">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
