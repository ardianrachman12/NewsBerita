@extends('layouts.app')
@section('content')
    <main id="main" class="main-page">
        <section id="hotels" class="section-with-bg" style="margin: -80px">
            <div class="">
                @include('portal.partials.list-category')
            </div>
            {{-- <div class="d-flex justify-content-end mx-4">
                {{ $categorypath->links('pagination::bootstrap-5') }}
            </div> --}}
        </section>
    </main>
@endsection
