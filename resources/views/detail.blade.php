@extends('layouts.main')
    @section('container')
    <!-- UNIT DETAIL START -->
    <div class="row justify-content-center mt-4 m-3">
      <div class="col-sm-5 align-self-center d-flex">
        <img src="assets/unit picture.png" alt="unit picture" class="img-fluid " >
      </div>
        <div class="col-12 col-md-5">
          <h3 class="title" style="font-size: 40px; font-weight: 700;">{{$unit->name}}</h3>
          <p class="desc">{!!$unit->description!!}</p>
          <div class="spesification row" style="font-weight: 700; font-size: 18px;">
            <div class="col g-1" style="color: #90A3BF;">
              Steering
            </div>
            <div class="col g-1">
              Manual
            </div>
            <div class="col g-1" style="color: #90A3BF;">
              Capacity
            </div>
            <div class="col g-1">
                {{$unit->capacity}} Person
              </div>
          </div>
          <div class="row  mt-5 ">
            <div class="col-12 d-flex justify-content-end">
                <a href="order.html" target="_blank" class="btn btn-dark">Rent Now</a>
              </div>
          </div>
          
        </div>
        
    </div>
      <!-- PICTURE DETAIL START -->
      <div class="row p-2 justify-content-center m-1">
        <div class="col-sm-5 g-2">
          <img src="assets/Frame 12.png" alt="" class="img-fluid">
        </div>
        <div class="col-sm-5 g-2">
          <img src="assets/Frame 12 (1).png" alt="" class="img-fluid">
        </div>
        <div class="col-sm-5 g-2">
          <img src="assets/Frame 12 (2).png" alt="" class="img-fluid">
        </div>
      </div>
      <!-- PICTURE DETAIL END -->
    <!-- UNIT DETAIL END -->

    <!-- FOOTER START -->
    <footer class="foot bg-light text-black text-center pt-4 pb-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6" style="font-size: 30px;">
            <p>Cahaya Waskitha Transport</p>
          </div>
          <div class="col-lg-12 mb-5">
            <a href="https://maps.app.goo.gl/HsnJf1b2Ks7Stm4V8" target="_blank" style="font-size: 12px; text-decoration: none;">Jl. Nogosari No.2, Nogosari I, Wukirsari, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782</a>
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
    @endsection