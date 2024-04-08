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
                  <h1 class="hero-heading">About YPPB</h1>
                  <div class="sub-text w-75">
                    <p>Yayasan pintar pemersatu bangsa.</p>
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
                <h3 class="text-center">About us</h3>
              </div>
            </div>

            <div class="row no-gutters">
              <div class="col-md-4"  data-aos="fade-up">
                 <img src="{{ asset('img/yp2b-about.jpg') }}" alt="Image" class="img-fluid " data-jarallax-element="-140" style="height: 510px; object-fit: cover; filter: brightness(70%);">
              </div>
              <div class="col-md-8">
                <div class="row justify-content-center">
                  <div class="col-md-10">
                    {{-- <h3 class="mb-4" data-aos="fade-up">YPPB Sejak 2017</h3> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up">
                                <div class="section">
                                    <h2>Yayasan Pintar Pemersatu Bangsa (YPPB Foundation)</h2>
                                    <p style="text-align: justify;">
                                        Yayasan Pintar Pemersatu Bangsa (YPPB Foundation) adalah sebuah yayasan nirlaba yang berdedikasi untuk pendidikan dan kemanusiaan sosial di Indonesia. Berdasarkan visi dan misi kami, kami terus melaksanakan kegiatan-kegiatan berikut:
                                    </p>
                                    <ul>
                                        <li>Bantuan Pendidikan untuk Anak-Anak Kurang Beruntung: Kami memberikan bantuan pendidikan kepada anak-anak yatim piatu dan orang miskin.</li>
                                        <li>Pemberdayaan Masyarakat: Kami berkomitmen untuk memberdayakan masyarakat melalui program-program yang relevan.</li>
                                        <li>Bantuan Kemanusiaan: Kami turut membantu korban bencana alam dan situasi darurat.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up">
                                <div class="section">
                                    <h2>Program-program yang Akan Segera Kami Implementasikan</h2>
                                    <p style="">
                                        Program-program yang akan segera kami implementasikan meliputi:
                                    </p>
                                    <ol>
                                        <li>Kursus Bahasa Inggris Gratis: Kami akan menyelenggarakan kursus bahasa Inggris selama 6 bulan bagi 256 guru PAUD dan RA di Kecamatan Padaherang, Kabupaten Pangandaran, Jawa Barat.</li>
                                        <li>Bantuan Rutin untuk Anak Yatim dan Orang Miskin: Kami memberikan kompensasi dan bantuan rutin kepada anak yatim dan orang miskin.</li>
                                        <li>Pelatihan Keterampilan untuk Pemuda: Kami akan memberikan pelatihan keterampilan dan pengembangan diri bagi pemuda.</li>
                                        <li>Pembangunan Pusat Pelatihan: Kami berencana membangun pusat pelatihan untuk pemberdayaan masyarakat.</li>
                                    </ol>
                                    <p style="text-align: justify;">Kami berharap dapat terus berkontribusi positif bagi masyarakat Indonesia. Terima kasih atas dukungan Anda!</p>
                                    <p style="text-align: justify;">Ferry Wibowo, M.Pd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
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
