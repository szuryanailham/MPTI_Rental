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
        <div class="col-sm-6 g-5">
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
                      <img src="/assets/user_unit.png" alt="clock">
                      <p>{{$unit->capacity}} Orang</p>
                    </div>
                    <div class="col">
                      <img src="/assets/gas_station.png" alt="clock">
                      <p>Full Bensin</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="d-block mx-auto p-2 mb-2">
              <a href="/order/{{$unit->slug}}" class="btn btn-dark me-5">Sewa</a>
              <a href="/detail/{{$unit->slug}}" class="btn btn-light ">Detail</a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
    <!-- CARD UNIT END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @endsection