@extends('layouts.main')
    @section('container')
    <!-- CONTENT START -->
    <div class="row justify-content-center mt-4 m-3">
        <div class="col-sm-5 align-self-center d-flex me-5">
          <img src="assets/profile_cw.png" alt="unit picture" class="img-fluid" >
        </div>
          <div class="col-12 col-md-5 pt-4">
            <h3 class="title" style="font-size: 25px; font-weight: 700; text-align: center; font-family: 'Plus Jakarta Sans';
            font-style: bold;">TENTANG KAMI</h3>
            <p class="desc" style="color: #000000; text-align: center;">Cahaya Waskitha Transport adalah penyedia layanan penyewaan kendaraan yang berlokasi di Yogyakarta, sebuah kota budaya yang kaya akan sejarah dan pesona alam. Dikenal karena komitmennya dalam menyediakan pengalaman perjalanan yang nyaman dan aman bagi pelanggan, Cahaya Waskitha Transport menawarkan berbagai pilihan kendaraan yang terawat dengan baik, mulai dari mobil keluarga hingga motor untuk petualangan pribadi.</p>
            <div class="row justify-content-center">
              <table style="width: auto;">
                <tr>
                    <td><img src="assets/Company.png" alt=""></td>
                    <td>Cahaya Waskitha Transport</td>
                </tr>
                <tr>
                    <td><img src="assets/User_profile.png" alt=""></td>
                    <td>Bayu Waskitha</td>
                </tr>
                <tr>
                    <td><img src="assets/Location.png" alt=""></td>
                    <td>Yogyakarta</td>
                </tr>
              </table>
            </div>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-lg-6 " style="font-size: 30px;">
              <p style="font-size: 32px; font-weight: 500; text-align: center;">Mengapa Memilih Kami</p>
            </div>
            <div class="row p-2 justify-content-center m-1 mb-5">
              <div class="col-sm-3 g-2">
                <img src="assets/profile1.png" alt="" class="img-fluid">
              </div>
              <div class="col-sm-3 g-2">
                <img src="assets/profile2.png" alt="" class="img-fluid">
              </div>
              <div class="col-sm-3 g-2">
                <img src="assets/profile3.png" alt="" class="img-fluid">
              </div>
            </div>
            
          
      </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="foot bg-light text-black text-center pt-4 pb-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 " style="font-size: 30px;">
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