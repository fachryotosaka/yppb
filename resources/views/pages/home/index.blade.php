@extends('layouts.home.app')

@section('title', 'Home')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="owl-carousel owl-hero">
    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('img/home/header-1.jpg') }}'); object-fit: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <div class="site-hero-contents text-center" data-aos="fade-up">
                        <h1 class="hero-heading">YPPB</h1>
                        <div class="sub-text">
                            <p>Yayasan Pintar Pemersatu Bangsa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('img/home/header-2.jpeg') }}'); object-fit: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="site-hero-contents text-center" data-aos="fade-up">
                        <h1 class="hero-heading">Pendidikan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('img/home/header-3.jpg') }}'); object-fit: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="site-hero-contents text-center" data-aos="fade-up">
                        <h1 class="hero-heading">Pelatihan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('img/home/header-4.jpg') }}'); object-fit: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="site-hero-contents text-center" data-aos="fade-up">
                        <h1 class="hero-heading">Kesehatan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('img/home/header-5.jpg') }}'); object-fit: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="site-hero-contents text-center" data-aos="fade-up">
                        <h1 class="hero-heading">Pemberdayaan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co--site-section float-left pb-0 featured-rooms">

    <div class="container">

        <div class="row custom-row-02192 align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                    <div class="media-29191-icon">
                        <img src="{{ asset('img/png/visi.png')}}" alt="Image" class="img-fluid">
                    </div>
                    <h3>Visi</h3>
                    <p class="text-center">
                        Menjadi Lembaga Sosial Nasional yang Mandiri, Kreatif, Inovatif, dan berperan aktif dalam mencerdaskan anak-anak Indonesia, mengentaskan kemiskinan, dan membantu masalah-masalah kemanusiaan.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                    <div class="media-29191-icon">
                        <img src="{{ asset('img/png/misi.png')}}" alt="Image" class="img-fluid">
                    </div>
                    <h3>Misi</h3>
                    <p class="text-center">
                        Memberdayakan pendidikan dan kemanusiaan untuk anak-anak kurang beruntung di Indonesia melalui bantuan, pemberdayaan masyarakat, dan kepedulian sosial.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                    <div class="media-29191-icon">
                        <img src="{{ asset('img/png/nilai.png')}}" alt="Image" class="img-fluid">
                    </div>
                    <h3>Nilai</h3>
                    <p class="text-center">
                        Nilai-nilai kami mencakup peduli dan empati terhadap sesama, peningkatan potensi anak-anak Indonesia melalui pendidikan, serta promosi kemandirian, kreativitas, dan inovasi.
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="untree_co--site-section">
    <div class="container pt-0 pb-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Tentang kami</h3>
            </div>

        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                        <img src="{{ asset('img/home/img_0.jpeg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-7 pl-lg-5 mt-5" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="section-title mb-4">Mengapa pilih kami ?</h2>
                        <p> YPPB bertujuan meningkatkan akses pendidikan dan kesehatan berkualitas untuk semua. Kami mendukung program beasiswa, pelatihan, dan layanan kesehatan terjangkau.</p>

                        <p>Kami juga memprioritaskan pencegahan, edukasi, dan pengembangan sumberdaya manusia melalui berbagai kerja sama lintas sektor untuk menciptakan perubahan berkelanjutan.</p>
                    </div>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="wrap-slider">
                        <div class="custom-slider owl-3-slider owl-carousel">
                            <div>
                                <img src="{{ asset('img/home/img_1.jpg') }}" alt="1" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover">
                            </div>
                            <div>
                                <img src="{{ asset('img/home/img_2.jpeg') }}" alt="2" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover">
                            </div>
                            <div>
                                <img src="{{ asset('img/home/img_3.jpeg') }}" alt="3" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover">
                            </div>
                            <div>
                                <img src="{{ asset('img/home/img_4.jpg') }}" alt="4" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover">
                            </div>
                            <div>
                                <img src="{{ asset('img/home/img_5.jpg') }}" alt="5" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover">
                            </div>
                            <div>
                                <img src="{{ asset('img/home/img_6.jpg') }}" alt="6" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover">
                            </div>
                            <div>
                                <img src="{{ asset('img/home/img_7.jpeg') }}" alt="7" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="yp2b-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 section-heading" data-aos="fade-up">
                <h3 class="text-left">Program</h3>
                <div class="w-75">
                    <p>Program pemberdayaan masyarakat YPPB</p>
                </div>
                <p><a href="{{ url('program') }}" class="readmore">All Posts</a></p>
            </div>
            @foreach ($activities as $activity )
                        <div class="col-md-4">
                            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                                <a href="#" class="thumb style="display: inline-block; padding: 10px;""><img src="{{ $activity->getFirstMedia('images')->getUrl() }}" alt="Image" style="height: 200px; width: 400px; object-fit: cover;"
                                    class="img-fluid"></a>
                                    <div class="post-entry-contents">
                                        <h3><a href="#">{{ $activity->name}}</a></h3>
                                        <div class="date">December 20, 2019 &bullet; by <a href="#">{{ $activity->Publisher->name }}</a></div>
                                        <p>
                                            {{ substr($activity->desc, 0, 100) }}{{ strlen($activity->desc) > 100 ? "..." : "" }}
                                            <span class="more-text" style="display:none;">{{ substr($activity->desc, 100) }}</span>
                                        </p>
                                        <p><a href="{{ route('home.single', $activity->slug) }}" class="readmore">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
        </div>
    </div>
</div>





</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->

@endpush
