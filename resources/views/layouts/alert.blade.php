<!-- Alert untuk menampilkan error -->
@if (session('error'))
@push('script')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
                showConfirmButton: true,
                confirmButtonText: 'Back'
            });
        </script>
    @endpush
@endif
{{-- @push('script')
    <script>
        $('.alert').alert()
    </script>
@endpush --}}