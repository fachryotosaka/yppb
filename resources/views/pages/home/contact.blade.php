@extends('layouts.home.app')

@section('title', 'Contact')

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
                            <h1 class="hero-heading">Kontak YPPB</h1>
                            <div class="sub-text w-75">
                                <p>Yayasan Pintar Pemersatu Bangsa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="untree_co--site-section">
            <div class="container">

                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h2 class="display-4 mb-5">Fill the form</h2>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                        <form action="{{ route('message.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email2">Your Email *</label>
                                <input type="text" class="form-control" id="email2" name="email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea name="message" class="form-control" id="message" cols="30"
                                    rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send" class="btn btn-black px-5 text-white">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <div class="media-29190">
                            <span class="label">Email</span>
                            <p><a href="mailto:admin@YPPB.org" target="_blank">admin@YPPB.org</a></p>
                        </div>
                        <div class="media-29190">
                            <span class="label">Phone</span>
                            <p><a href="https://wa.me/62816771568" target="_blank">0816-77-1568</a></p>
                        </div>
                        <div class="media-29190">
                            <span class="label">Alamat</span>
                            <p>Jl. Situ Bahar (sebelah SDN 05 Sukamaju)
                                Rt 004 RW 002 No. 14 Kelurahan Sukamaju kecamatan Cilodong
                                Kota Depok – Jawa Barat , 16475</p>
                        </div>
                        <div class="media-29190">
                            <span class="label">Social</span>
                            <ul class="icons-top icons-dark">
                                <li>
                                    <a href="https://www.facebook.com/people/YPPB-Foundation/100068467448252/"
                                        target="_blank"><span class="icon-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@YPPBfoundation877" target="_blank"><span
                                            class="icon-youtube"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/foundationYPPB/" target="_blank"><span
                                            class="icon-instagram"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-tripadvisor"></span></a>
                                </li>
                            </ul>
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
