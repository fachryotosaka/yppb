@extends('layouts.home.app')

@section('title', 'Program')

@push('style')
<!-- CSS Libraries -->
<style>
    .thumb {
        display: inline-block;
        padding: 10px;
    }
    .thumb img {
        height: 200px;
        width: 400px;
        object-fit:;
    }
</style>
@endpush

@section('main')

<div class="owl-carousel owl-hero">
    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('img/home/program.jpeg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <div class="site-hero-contents text-center" data-aos="fade-up">
                        <h1 class="hero-heading">Program</h1>
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
                <h3 class="text-center">Program lainnya</h3>
              </div>
            </div>
                <div class="container">
                    <div class="row">
                        @foreach ($activities as $activity )
                        <div class="col-md-4">
                            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                                <a href="#" class="thumb style="display: inline-block; padding: 10px;""><img src="{{ $activity->getFirstMedia('images')->getUrl() }}" alt="Image" style="height: 200px; width: 400px; object-fit: cover;"
                                    class="img-fluid"></a>
                                    <div class="post-entry-contents">
                                        <h3><a href="#">{{ $activity->name}}</a></h3>
                                        <div class="date">{{ $createdAt }} &bullet; by <a href="#">{{ $activity->Publisher->name }}</a></div>
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
      </main>

  </div>



</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->

@endpush
