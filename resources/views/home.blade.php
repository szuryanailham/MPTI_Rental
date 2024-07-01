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

     {{-- Search --}}
    <div class="row justify-content-center px-3">
      <div class="col-md-6 mt-5">
          <form action="/" method="GET">
              <div class="input-group mb-3">
                  <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" value=" {{request('search')}} ">
                  <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
              </div>
          </form>
      </div>
    </div>

    <!-- CARD UNIT START -->
    <div class="row mt-2 p-3 justify-content-center">
      
      @foreach ($units as $unit)
        <div class="col-lg-4 g-3 mb-4 align-items-stretch">
          <div class="card ">
            <div class="mobil justify-content-between d-flex p-2" style="font-size: 22px; line-height: 26px;">
              <div class="me-2">{{$unit->name}}</div>
              <div>{{$unit->price}}K</div>
            </div>
            <div class="card-body mx-auto">
              <a href="/detail" class="d-flex justify-content-center">
                @if ($unit->image)
                    <img src="{{asset('storage/'. $unit->image)}}" class="img-thumbnail" alt="gambar unit" style="width: 200px;">            
                @else
                    @if ($unit->category->name == 'car' || $unit->category->name == 'Car') 
                        <img src="{{asset('assets/car.png')}}" class="img-thumbnail" alt="gambar unit mobil" style="width: 200px;"> 
                    @elseif ($unit->category->name == 'motorcycle' || $unit->category->name == 'Motorcycle') 
                        <img src="{{asset('assets/motorcycle.png')}}" class="img-thumbnail" alt="gambar unit motor" style="width: 200px;"> 
                    @else
                        <img src="https://picsum.photos/200" alt="Gambar Unit" class="img-thumbnail">
                    @endif   
                @endif
              </a>
                <div class="container">
                  <div class="row align-items-start mt-3" style="font-size: 15px;">
                    <div class="col-sm-4 text-center">
                      <img src="/assets/clock.png" alt="clock" >
                      <p>1 Hari</p>
                    </div>
                    <div class="col-sm-4 text-center">
                      <img src="/assets/user_unit.png" alt="clock">
                      <p>{{$unit->capacity}} Orang</p>
                    </div>
                    <div class="col-sm-4 text-center">
                      <img src="/assets/gas_station.png" alt="clock">
                      <p>Full Bensin</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mx-auto p-2 mb-2">  
              <a href="/order/{{$unit->slug}}" class="btn btn-dark me-5">Sewa</a>
              <a href="/detail/{{$unit->slug}}" class="btn btn-light ">Detail</a>
            </div>
          </div>
        </div>
      @endforeach
      
      
      {{$units->links()}}

    </div>
    <!-- CARD UNIT END -->


    
    @endsection