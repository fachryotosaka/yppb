<div class="untree_co--site-section py-5 bg-body-darker cta">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="m-0 p-0">Dukung Program Kami Dengan Berdonasi Ke Rekening Bank Syariah Indonesia ( BSI ) No Rek. <strong></strong><a onclick="copyText()" id="norek" style="cursor: pointer" > 71 668 141 24
           </a><strong></strong> Atas nama Yayasan Pintar Pemersatu Bangsa</h3>
        </div>
      </div>
    </div>
  </div>

<footer class="untree_co--site-footer">

    <div class="container">
      <div class="row">
        <div class="col-md-4 pr-md-5">
          <h3>About Us</h3>
          <p>Yayasan Pintar Pemersatu Bangsa (YPPB Foundation) adalah sebuah yayasan nirlaba yang berdedikasi untuk pendidikan dan sosial kemanusiaan di Indonesia..</p>
          <p><a href="{{ url('/about')}}" class="readmore">Read more</a></p>
        </div>
        <div class="col-md-8 ml-auto">
          <div class="row">
            <div class="col-md-3">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/program') }}">Program</a></li>
                <li><a href="{{ url('/about') }}">Profil</a></li>
                <li><a href="{{ url('/gallery') }}">Galeri</a></li>
                <li><a href="{{ url('/contact') }}">Kontak</a></li>
                {{-- <li><a href="{{ url('/') }}">News</a></li> --}}
              </ul>
            </div>
            <div class="col-md-9 ml-auto">
              <div class="row mb-3">
                <div class="col-md-6">
                  <h3>Alamat</h3>
                  <address>Jl. Situ Bahar (sebelah SDN 05 Sukamaju)
                    Rt 004 RW 002 No. 14 Kelurahan Sukamaju kecamatan Cilodong
                    Kota Depok – Jawa Barat , 16475</address>
                </div>
                <div class="col-md-6">
                  <h3>Kontak</h3>
                  <p>
                    <a href="https://wa.me/62816771568" target="_blank">0816-77-1568</a> <br>
                    <a href="mailto:admin@yp2b.org" target="_blank">admin@yp2b.org</a>
                  </p>
                </div>
              </div>

              {{-- <h3 class="mb-0">Join our newsletter</h3>
              <p>Be the first to know our latest updates and news!</p>
              <form action="{{ route('subscribe')}}" method="POST" class="form-subscribe">
                @csrf
                  <div class="form-group d-flex">
                      <input type="text" name="email" class="form-control mr-2" placeholder="Enter your email" required>
                      <input type="submit" value="Send" class="btn btn-black px-4 text-white">
                  </div>
              </form> --}}
            </div>

          </div>
        </div>
      </div>
      <div class="row mt-5 pt-5 align-items-center">
        <div class="col-md-6 text-md-left">
          <!-- Link back to Untree.co can't be removed. Template is licensed under CC BY 3.0. If you purchased a license you can remove this. -->
          {{-- <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="index.html">Untree.co</a>. All Rights Reserved. Design by <a href="https://untree.co/" target="_blank" class="text-primary">Untree.co</a>
          </p> --}}
        <!-- Link back to Untree.co can't be removed. Template is licensed under CC BY 3.0. If you purchased a license you can remove this. -->
        </div>
        <div class="col-md-6 text-md-right">
          <ul class="icons-top icons-dark">
          <li>
            <a href="https://www.facebook.com/people/YP2B-Foundation/100068467448252/" target="_blank"><span class="icon-facebook"></span></a>
          </li>
          <li>
            <a href="https://www.youtube.com/@yp2bfoundation877" target="_blank"><span class="icon-youtube"></span></a>
          </li>
          <li>
            <a href="https://www.instagram.com/foundationyp2b/" target="_blank"><span class="icon-instagram"></span></a>
          </li>
          <li>
            {{-- <a href="#"><span class="icon-tripadvisor"></span></a> --}}
          </li>
        </ul>

        </div>
      </div>
    </div>

  </footer>
