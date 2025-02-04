@extends('layouts.app')
@section('hero')
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">Berita News <br><span>Collection</span> of News Update</h1>
            <p class="mb-2 pb-0">Let's read the news and choose the news vendor you like</p>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
            <a href="#speakers" class="about-btn scrollto">Choose News Vendor</a>
        </div>
    </section>
@endsection
@section('content')
    <main id="main">
        @include('layouts.alert')
        <section id="speakers">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>News Vendor</h2>
                    <p>Here are some of our news vendor</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('portal.vendorOne') }}"><img
                                    src="{{ asset('img/republika.png') }}" alt="republika_news"
                                    class="img-fluid" /></a>
                            <div class="details">
                                <h3><a href="{{ route('portal.vendorOne') }}">Republika News</a></h3>
                                <p>Kumpulan berita yang berasal dari Republika News</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('portal.vendorTwo') }}">
                                <img src="{{ asset('img/antara.png')}}"
                                    alt="Antara_news" class="img-fluid">
                            </a>
                            <div class="details">
                                <h3><a href="{{ route('portal.vendorTwo') }}">Antara News</a></h3>
                                <p>Kumpulan berita yang berasal dari Antara News</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('portal.vendorThree') }}"><img
                                    src="{{ asset('img/jpnn-logo.png') }}" alt="Jpnn_news"
                                    class="img-fluid" /></a>
                            <div class="details">
                                <h3><a href="{{ route('portal.vendorThree') }}">JPNN News</a></h3>
                                <p>Kumpulan berita yang berasal dari JPNN News</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('portal.vendorFour') }}"><img
                                    src="{{ asset('img/kumparan.png') }}" alt="Kumparan_news"
                                    class="img-fluid" /></a>
                            <div class="details">
                                <h3><a href="{{ route('portal.vendorFour') }}">Kumparan News</a></h3>
                                <p>Kumpulan berita yang berasal dari Kumparan News</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('portal.vendorFive') }}"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/CNN_Indonesia_logo.svg/2048px-CNN_Indonesia_logo.svg.png" alt="Kumparan_news"
                                    class="img-fluid" /></a>
                            <div class="details">
                                <h3><a href="{{ route('portal.vendorFive') }}">CNN News</a></h3>
                                <p>Kumpulan berita yang berasal dari CNN News</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('portal.vendorSix') }}"><img
                                    src="{{asset('img/CNBC.png')}}" alt="CNBC_news"
                                    class="img-fluid" /></a>
                            <div class="details">
                                <h3><a href="{{ route('portal.vendorSix') }}">CNBC News</a></h3>
                                <p>Kumpulan berita yang berasal dari CNBC News</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('portal.vendorSeven') }}"><img
                                    src="https://www.sinkgard.com/wp-content/uploads/2022/03/qSiwktVlrLn7M5W0hMRJvToNTFA7KWg3.png" alt="Sindo_news"
                                    class="img-fluid" /></a>
                            <div class="details">
                                <h3><a href="{{ route('portal.vendorSeven') }}">Sindo News</a></h3>
                                <p>Kumpulan berita yang berasal dari Sindo News</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Speakers Section -->

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>About The Website</h2>
                        <p>Di Berita News, kami mengerti pentingnya mendapatkan informasi yang cepat dan akurat. Website
                            kami adalah destinasi utama bagi Anda yang mencari berita terpercaya dari berbagai sumber
                            terkemuka. Tersedia vendor-vendor berita ternama seperti CNN News,
                            Republika News, Antara News, dan banyak lagi, kami menyajikan beragam perspektif dan analisis
                            mendalam tentang peristiwa terkini di Indonesia dan seluruh dunia.</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->
@endsection
