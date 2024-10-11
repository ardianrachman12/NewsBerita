@extends('layouts.app')
@section('content')
<main id="main" class="main-page">
    <section id="hotels" class="section-with-bg" >
        <div>
            @include('portal.partials.list-category')
        </div>
    </section>
</main>
@endsection
