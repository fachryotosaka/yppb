@extends('layouts.home.app')

@section('title', 'Gallery')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="owl-carousel owl-hero">
    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('img/home/gallery.jpg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <div class="site-hero-contents text-center" data-aos="fade-up">
                        <h1 class="hero-heading">Gallery</h1>
                        <div class="sub-text">
                            {{-- <p>Lorem ipsum dolor sit amet slebew</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co--site-wrap">

    <main class="untree_co--site-main">

      <div class="untree_co--site-section">
        <div class="container">
          <div class="row justify-content-center text-center pt-0 pb-5">
            <div class="col-lg-6 section-heading" data-aos="fade-up">
              <h3 class="text-center">More Galleries</h3>
            </div>
          </div>
          <div class="row gutter-2">
            @foreach($gallery as $index => $galleryItem)
                @php $mediaCount = count($galleryItem->getMedia('gallery')); @endphp
                @foreach($galleryItem->getMedia('gallery') as $mediaIndex => $media)
                    @if($mediaIndex == 0 || $mediaIndex == 1)
                        <!-- Gambar besar -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $mediaIndex * 100 }}">
                            <a href="{{ $media->getUrl() }}" data-fancybox="gallery">
                                <img src="{{ $media->getUrl() }}" alt="" class="img-fluid" style="width: 100%; height: 400px;">
                            </a>
                        </div>
                    @else
                        <!-- Gambar kecil -->
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ ($mediaIndex % 5) * 100 }}">
                            <a href="{{ $media->getUrl() }}" data-fancybox="gallery">
                                <img src="{{ $media->getUrl() }}" alt="" class="img-fluid" style="width: 100%; height: 250px;">
                            </a>
                        </div>
                    @endif
                @endforeach
                <!-- Jika jumlah gambar kurang dari 5, tambahkan placeholder untuk gambar kecil -->
                @if($mediaCount < 5)
                    @for($i = $mediaCount; $i < 5; $i++)
                        <div class="col-md-4"></div>
                    @endfor
                @endif
            @endforeach
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
