@extends('layouts.app')
@section('content')
    <div class="main-page container py-5">
        @include('layouts.alert')
        <div class="">
            <h1>Download mp3 Youtube</h1>
            <form action="{{ route('downloadMp3') }}" method="GET">
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="text" name="url" placeholder="masukkan url youtube">
                    </div>
                    <div class="col">
                        <button class="btn btn-success">send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection