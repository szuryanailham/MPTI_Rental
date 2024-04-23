@extends('layouts.main')
    @section('container')
    <!-- CAROUSEL IMAGE START  -->
    <div id="carouselExampleCaptions" class="carousel slide" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/tugu jogja.jpg" class="d-block w-100" alt="" style="height: 500px;" >
          <div class="carousel-caption">
            <h5>✨ DISKON ✨</h5>
            <p>Menyusuri keindahan sejarah dan budaya di Yogyakarta.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/tugu jogja.jpg" class="d-block w-100" alt="" style="height: 500px;">
          <div class="carousel-caption">
            <h5>✨ PROMO ✨</h5>
            <p>Menikmati keindahan alam tropis, kebudayaan yang kaya, dan keajaiban arsitektur pura.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/tugu jogja.jpg" class="d-block w-100" alt="" style="height: 500px;">
          <div class="carousel-caption">
            <h5>✨ Sumatera Barat Tour ✨</h5>
            <p>Tur yang membawa menikmati keindahan alam yang memukau.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- CAROUSEL IMAGE END -->

    <!-- CARD UNIT START -->
    <div class="row mt-2 p-5">
      
      @foreach ($units as $unit)
        <div class="col-sm-4 g-4">
          <div class="card">
            <div class="mobil justify-content-between d-flex p-2" style="font-size: 22px; line-height: 26px;">
              <div>{{$unit->name}}</div>
              <div>{{$unit->price}}K</div>
            </div>
            <div class="card-body mx-auto">
              <a href="/detail">
                <img src="https://picsum.photos/200" class="img-thumbnail" alt="gambar unit mobil">
              </a>
                <div class="container">
                  <div class="row align-items-start mt-3" style="font-size: 15px;">
                    <div class="col">
                      <img src="/assets/clock.png" alt="clock" >
                      <p>Jam</p>
                    </div>
                    <div class="col">
                      <img src="/assets/gas_station.png" alt="clock">
                      <p>{{$unit->capacity}} Orang</p>
                    </div>
                    <div class="col">
                      <img src="/assets/user_unit.png" alt="clock">
                      <p>Full Bensin</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="d-block mx-auto p-2 mb-2">
              <a href="" class="btn btn-dark me-5">Sewa</a>
              <a href="/detail/{{$unit->slug}}" class="btn btn-light ">Detail</a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
    <!-- CARD UNIT END -->

    <!-- FOOTER START -->
    <footer class="foot bg-light text-black text-center pt-4 pb-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 " style="font-size: 30px;">
            <p>Cahaya Waskitha Transport</p>
          </div>
          <div class="col-lg-12 mb-5">
            <a href="https://maps.app.goo.gl/HsnJf1b2Ks7Stm4V8" target="_blank" style="font-size: 10px; text-decoration: none;">Jl. Nogosari No.2, Nogosari I, Wukirsari, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782</a>
          </div>
          <div class="row justify-content-center">
            <div class="col-10 d-flex justify-content-center ">
              <div class="col-2 ">
                <a href="https://www.instagram.com/cahaya_waskitha?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                  <img src="assets/Instagram.png" alt="Instagram">
                </a>
              </div>
              <div class="col-2">
                <a href="" target="_blank">
                  <img src="assets/Youtube.png" alt="Youtube">
                </a>
              </div>
              <div class="col-2 ">
                <a href="https://wa.me/628562711129" target="_blank">
                  <img src="assets/Whatsapp.png" alt="Whatsapp">
                </a>
              </div>
              <div class="col-2">
                <a href="" target="_blank">
                  <img src="assets/Facebook.png" alt="Facebook">
                </a>
              </div>
            </div>
            
          </div>
          <div class="col-lg-12 mt-5 text-end">
            <a href="login_admin.html" style="text-decoration: none; color: black;">Login as Admin</a>
          </div>
          <div class="col-lg-12 mt-2">
            <p>&copy; 2024 CahayaWaskitha. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER END -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @endsection