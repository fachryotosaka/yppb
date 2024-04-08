@extends('layouts.single.app')

@section('title', 'Detail')

@push('style')
<style>
    .card-text {
        cursor: pointer;
    }
</style>
@endpush

@section('main')

<div class="untree_co--site-hero inner-page bg-light" style="background-color: #fff;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <div class="site-hero-contents" data-aos="fade-up">
                    @if ($activities->count() > 0)
                    <h1 class="hero-heading">More About {{ $activities->name }} Program</h1>
                    @endif
                    <div class="sub-text w-75">
                        <p>Facilities provided may range from a modest-quality mattress in a small room to large suites
                            with bigger.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co--site-section">
    <div class="container">

        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">

                <div class="post-content-body">
                    <p style="text-align: justify">{!! Illuminate\Support\Str::limit($wrappedText, 1000) !!}</p>
                    <div class="row my-4">
                        <div class="col-md-12 mb-4">
                            <img src="{{ $activities->getMedia('images')->first()->getUrl() }}" alt="Image placeholder"
                                class="img-fluid rounded" style="width: 100%; height: 500px; object-fit: cover;">
                        </div>
                        @foreach($activities->getMedia('images')->slice(1) as $media)
                        <div class="col-md-6 mb-4">
                            <img src="{{ $media->getUrl() }}" alt="{{ $media->name }}" class="img-fluid rounded"
                                style="width: 600px; height: 250px; object-fit: cover;">
                        </div>
                        @endforeach
                    </div>
                    <p>{!! substr($wrappedText, 1000) !!}</p>
                </div>
                <br>
                <hr>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4>Donasi</h4>
                    </div>
                    <div class="card-body" id="cardText">
                        <p class="card-text">Rekening Bank Syariah Indonesia ( BSI ) No Rek <strong>{{ $activities->payment->norek }}</strong> Atas nama Yayasan Pintar Pemersatu Bangsa</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-right justify-content-end">
                        <br>
                        <button id="copyButton" class="btn btn-black px-3 text-white rounded" onclick="copyToClipboard()">Copy to Clipboard</button>
                    </div>
                </div>

            </div>


            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box">
                    <h3 class="heading">Related Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul class="list-unstyled">
                            @foreach ($relatedPosts as $post )
                            <li class="media mb-4">
                                <a href="" class="d-flex">
                                    <!-- Gambar di sebelah kiri teks -->
                                    <img src="{{ $post->getFirstMedia('images')->getUrl() }}" alt="placeholder"
                                        class="mr-3 rounded img-fluid"
                                        style="width: 100px; height: 85px; object-fit: cover;">
                                    <div class="media-body">
                                        <!-- Judul post -->
                                        <h4 class="mt-0 mb-1"><a
                                                href="{{ route('home.single', $activities->slug) }}">{{ $post->name }}</a>
                                        </h4>
                                        <!-- Tanggal post -->
                                        <div class="post-meta">
                                            <span class="mr-2">{{ $createdAt }} </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        <li><a href="#">{{ $activities->Category->name }} </a></li>
                    </ul>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Tags</h3>
                    <ul class="tags">
                        @foreach ($activities->tags as $tag )
                        <li><a href="#">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<!-- SweetAlert JS -->
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

<script>
function copyToClipboard() {
    // Dapatkan teks dari elemen cardText
    var cardText = document.getElementById("cardText").innerText;

    // Cari dan ekstrak angka dari teks menggunakan ekspresi reguler
    var numbers = cardText.match(/\d+/g).join('');

    // Buat elemen textarea sementara untuk menempelkan teks angka
    var textarea = document.createElement("textarea");
    textarea.value = numbers;

    // Sembunyikan elemen textarea
    textarea.style.position = "fixed";
    textarea.style.opacity = 0;
    document.body.appendChild(textarea);

    // Pilih dan salin teks angka dari elemen textarea
    textarea.select();
    document.execCommand("copy");

    // Hapus elemen textarea sementara
    document.body.removeChild(textarea);

    // Ubah teks tombol menjadi "Copied to Clipboard"
    var copyButton = document.getElementById("copyButton");
    copyButton.innerText = "Copied to Clipboard";

    // Nonaktifkan tombol
    copyButton.disabled = true;

    // Setelah 3 detik, kembalikan teks tombol ke semula dan aktifkan kembali tombol
    setTimeout(function() {
        copyButton.innerText = "Copy to Clipboard";
        copyButton.disabled = false;
    }, 3000);
}

</script>
@endpush
