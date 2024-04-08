@extends('layouts.home.app')

@section('title', 'About')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')

<div class="untree_co--site-wrap">

    <main class="untree_co--site-main">
        <div class="untree_co--site-hero inner-page bg-light" style="background-color: #fff;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-9">
                <div class="site-hero-contents" data-aos="fade-up">
                  <h1 class="hero-heading">Profil Lembaga YPPB</h1>
                  <div class="sub-text w-75">
                    <p>Yayasan Pintar Pemersatu Bangsa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-section">

          <div class="container-fluid px-md-0">

            <div class="row justify-content-center text-center pt-0 pb-5">
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-left">Profile Lembaga</h3>
              </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6" data-aos="fade-up">
                                        <div class="section">
                                            <h2>Yayasan Pintar Pemersatu Bangsa (YPPB Foundation)</h2>
                                            <p style="text-align: justify;">
                                                Yayasan Pintar Pemersatu Bangsa (YPPB): Menuju Masyarakat yang Inklusif - Inklusi, Keterlibatan, dan Transformasi. 2024 Kami mendukung keragaman dan inklusi masyarakat Indonesia. Kami berjuang untuk memastikan bahwa semua komunitas, kelompok, dan masyarakat Indonesia menikmati akses yang sama terhadap peluang dan sumber daya. Kami mendukung kebijakan yang menghargai dan memperlakukan manusia dengan martabat dan rasa hormat serta merangkul perbedaan. Untuk mencapai tujuan ini, organisasi kami berfokus pada keterlibatan dan transformasi.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6" data-aos="fade-up">
                                        <div class="section">
                                            <h2>Program-program yang Akan Segera Kami Implementasikan</h2>
                                            <p style="text-align: justify;">
                                                Keterlibatan selalu menjadi kunci untuk memenangkan semua jenis diskriminasi dan ketidaksetaraan. Kami mendorong lebih banyak orang untuk terlibat dengan koalisi berbagai pemangku kepentingan dalam komunitas mereka untuk meningkatkan inklusi bagi mereka yang terpinggirkan dan dikucilkan. Fokus pada transformasi dimaksudkan untuk mengubah komunitas yang tertekan dan kelompok rentan, seperti perempuan, anak perempuan, anak-anak dan pemuda, minoritas, komunitas adat, penyandang disabilitas, dan orang-orang yang hidup di bawah garis kemiskinan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <img src="{{ asset('img/yp2b-about.jpg') }}" alt="Image" class="img-fluid " data-jarallax-element="-140" style="height: 510px; object-fit: cover; filter: brightness(70%);">
                </div>
            </div>


          </div>
        </div>
      </main>
  </div>



</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->

@endpush
