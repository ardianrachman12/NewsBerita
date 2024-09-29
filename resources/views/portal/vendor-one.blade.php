@extends('layouts.app')
@section('content')
    <main id="main" class="main-page">
        <section id="hotels" class="section-with-bg">
            <div id="content">
                @include('portal.main-news', ['categorypath' => $categorypath])
            </div>
            <div class="d-flex justify-content-end mx-4">
                {{ $categorypath->links('pagination::bootstrap-5') }}
            </div>
        </section>
    </main>
@endsection
{{-- @push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];

            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: "/vendorOne?page=" + page,
                success: function(data) {
                    $('#content').html(data);
                }
            });
        }
    </script>
@endpush --}}
