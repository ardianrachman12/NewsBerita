<section id="hotels" class="section-with-bg">
    @foreach ($categorypath as $category)
        <div class="container mb-2" data-aos="fade-up">
            <div class="section-header">
                <h2>{{ $category['data']['title'] }}</h2>
                <p>baca berita terupdate hanya di {{ $category['data']['title'] }}</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-9 col-sm-12 col-md-8">
                    <div class="row">
                        @for ($i = 0; $i < 12; $i++)
                            @php
                                $post = $category['data']['posts'][$i];
                            @endphp
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="hotel">
                                    <div class="hotel-img">
                                        <img src="{{ $post['thumbnail'] }}" alt="Hotel 1" class="img-fluid">
                                    </div>
                                    <h3><a target="_blank" href="{{ $post['link'] }}">{{ $post['title'] }}</a></h3>
                                    <p>{{ \Carbon\Carbon::parse($post['pubDate'])->format('d F Y, H:i:s') }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-4">
                    <div class="card text-bg-dark">
                        <div class="card-body">
                            <h2 class="card-title">Daftar Berita</h2>
                        </div>
                        <ul class="list-group list-group-flush" style="max-height: 800px; overflow-y: auto;">
                            @for ($i = 0; $i < count($category['data']['posts']); $i++)
                                @php
                                    $post = $category['data']['posts'][$i];
                                @endphp
                                <li class="list-group-item"><a target="_blank"
                                        href="{{ $post['link'] }}">{{ $post['title'] }}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="py-4">
    @endforeach
</section>
