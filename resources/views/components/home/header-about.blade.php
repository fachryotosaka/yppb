<div id="untree_co--overlayer"></div>
<div class="loader">
  <div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>

<nav class="untree_co--site-mobile-menu">
    <div class="close-wrap d-flex">
      <a href="#" class="d-flex ml-auto js-menu-toggle">
        <span class="close-label">Close</span>
        <div class="close-times">
          <span class="bar1"></span>
          <span class="bar2"></span>
        </div>
      </a>
    </div>
    <div class="site-mobile-inner"></div>
  </nav>


<div class="untree_co--site-wrap">

  <nav class="untree_co--site-nav dark js-sticky-nav">
    <div class="container d-flex align-items-center">
      <div class="logo-wrap">
        <a href="{{ url('/') }}" class="untree_co--site-logo">YPPB</a>
      </div>
      <div class="site-nav-ul-wrap text-center d-none d-lg-block">
        <ul class="site-nav-ul js-clone-nav">
          <li class="{{ $type_menu === 'home' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
          <li class="{{ $type_menu === 'program' ? 'active' : '' }}"><a href="{{ url('program') }}">Program</a></li>
          <li class="has-children">
            <a href="{{ url('about') }}">Profil</a>
            <ul class="dropdown">
              <li>
                <a href="{{ url('lembaga') }}">Profil lembaga</a>
              </li>
              <li>
                <a href="{{ url('kepengurusan') }}">Kepengurusan</a>
              </li>
              <li>
                <a href="{{ url('legalitas') }}">Legal formal</a>
              </li>
              <li>
                <a href="{{ url('about') }}">About</a>
              </li>
            </ul>
          </li>
          <li class="{{ $type_menu === 'gallery' ? 'active' : '' }}"><a href="{{ url('gallery') }}">Galeri</a></li>
          <li class="{{ $type_menu === 'contact' ? 'active' : '' }}"><a href="{{ url('contact') }}">Kontak</a></li>
          {{-- <li><a href="contact.html">News</a></li> --}}
        </ul>
      </div>
      <div class="icons-wrap text-md-right">

        <ul class="icons-top d-none d-lg-block">
          <li>
            <a href="https://www.facebook.com/people/YP2B-Foundation/100068467448252/" target="_blank"><span class="icon-facebook"></span></a>
          </li>
          <li>
            <a href="https://www.youtube.com/@yp2bfoundation877" target="_blank"><span class="icon-youtube"></span></a>
          </li>
          <li>
            <a href="https://www.instagram.com/foundationyp2b/" target="_blank"><span class="icon-instagram"></span></a>
          </li>
        </ul>

        <!-- Mobile Toggle -->
        <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
      </div>
    </div>
  </nav>

<div class="untree_co--site-main">
