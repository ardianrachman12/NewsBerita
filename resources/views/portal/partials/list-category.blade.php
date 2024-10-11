    {{-- menampilkan kategori dari setiap vendor berita --}}
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Category of News Vendor</h2>
            <p>Here are some category of our news vendor</p>
        </div>
        @include('layouts.alert')
        <div class="row px-4" data-aos="fade-up" data-aos-delay="100">
            @foreach ($category as $item)
                <div class="col-lg-3 col-sm-12 col-md-4">
                    <div class="hotel pt-4">
                        <h3><a href="{{ $vendor .'/'. $item['name'] }}">{{ $item['name'] }}</a></h3>
                        <p>read news with {{$item['name']}} category from {{$vendor}} news vendor</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

