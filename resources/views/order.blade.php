@extends('layouts.main')
    @section('container')
    <!-- FORM ORDER START -->

    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-4  mx-auto text-center">
                <img src="assets/wa.png" alt="" class="img-fluid ">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 mx-auto text-center">
                <p class="title" style="font-weight: 700; font-size: 30px;">Bayu Waskitha</p>
                <p class="desc" style="font-size: 20px;">NISMO has become the embodiment of Nissan's outstanding performance, inspired by the most unforgiving proving ground, the "race track".</p>
            </div>
        </div>
        <div class="row">
            <div class="col mx-auto text-center">
                <a href="https://wa.me/628562711129" target="_blank" class="title btn btn-dark ">Contact Us</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col mx-auto text-center">
                <a href="detail.html">
                    <i class="bi bi-arrow-left-square-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
                      </svg>
                </a>
            </div>
        </div>

         {{-- FILL IN THE FORM  --}}
        <form action="/order" method="POST" >
          @csrf
                <!-- PENYEWAAN START -->
                <div class="row mt-5">
                  <div class="col mx-auto text-center">
                      <h4 style="text-decoration: underline;">Form Penyewaan</h4>
                      <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info penyewaan</p>
                  </div>
                </div>
                <div class="row ">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap"  >
                      </div>
                      <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Alamat"  >
                      </div>
                      <div class="mb-3">
                        <label for="phone-number" class="form-label">No. Handphone</label>
                        <input type="text" name="phone" class="form-control" id="phone-number" placeholder="No. Handphone"  >
                      </div>
                      <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" name="unit" class="form-control" id="unit" placeholder="Unit"  value="{{$unit->name}}" disabled>
                      </div>
                </div>            
            <!-- PENYEWAAN END -->
    
            <!-- PENJEMPUTAN START -->
            <div class="row mt-5">
                <div class="col mx-auto text-center">
                    <h4 style="text-decoration: underline;">Penjemputan</h4>
                    <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info penjemputan</p>
                </div>
            </div>
            <div class="row ">
                <div class="mb-3">
                    <label for="pickup-address" class="form-label">Lokasi</label>
                    <input type="text" name="pickup" class="form-control" id="pickup-address" placeholder="Lokasi Penjemputan"  >
                  </div>
                  <div class="mb-3">
                    <label for="start-time" class="form-label">Waktu</label>
                    <input type="datetime-local" name="start-time" class="form-control" id="start-time" placeholder="Waktu Sewa"  >
                  </div>
                  <div class="mb-3">
                    <label for="start-date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="start-date" placeholder="Tanggal Sewa"  >
                  </div>
            </div>
            <!-- PENJEMPUTAN END  -->
    
            <!-- PENGEMBALIAN START -->
            <div class="row mt-5">
                <div class="col mx-auto text-center">
                    <h4 style="text-decoration: underline;">Pengembalian</h4>
                    <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info pengembalian</p>
                </div>
            </div>
            <div class="row ">
                <div class="mb-3">
                    <label for="retutn-address" class="form-label">Lokasi</label>
                    <input type="text" name="return" class="form-control" id="retutn-address" placeholder="Lokasi Pengembalian"  >
                  </div>
                  <div class="mb-3">
                    <label for="end-time" class="form-label">Waktu</label>
                    <input type="time" name="end-time" class="form-control" id="end-time" placeholder="Waktu Kumpul"  >
                  </div>
                  <div class="mb-3">
                    <label for="end-date" class="form-label">Tanggal</label>
                    <input type="date" name="end-date" class="form-control" id="end-date" placeholder="Tanggal Pengembalian"  >
                  </div>
            </div>
            <!-- PENGEMBALIAN END  -->
    
            <div class="row mt-5 justify-content-center">
                <div class="col-4 text-center">
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
            </div>
        </form>

    <!-- FORM ORDER END -->
</div>

<<<<<<< HEAD
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
              <a href="" style="text-decoration: none; color: black;">Login as Admin</a>
            </div>
            <div class="col-lg-12 mt-2">
              <p>&copy; 2024 CahayaWaskitha. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
      <!-- FOOTER END -->
=======

>>>>>>> 7d6d9ac582a6dbc418c14802caa08cabbb92cb94
      @endsection