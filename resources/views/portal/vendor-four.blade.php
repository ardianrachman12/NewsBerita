@extends('layouts.app')
@section('content')
    <main id="main" class="main-page">
        <section id="hotels" class="section-with-bg">
            <div id="content">
                @include('portal.single-category', ['category' => $category])
            </div>
        </section>
    </main>
@endsection