@extends('layouts.main')
    @section('container')
    <!-- Gambar di luar navbar untuk tampilan mobile -->
    <img src="assets/img_about.png" alt="Gambar Kendaraan" class="img-fluid d-block d-lg-none" />

    <section class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/img_about.png" alt="Gambar Kendaraan" class="img-fluid d-none d-lg-block" />
        </div>
        <div class="col-md-6">
          <h2 class="text-center">TENTANG KAMI</h2>
          <p class="text">
            Cahaya Waskitha Transport adalah penyedia layanan penyewaan kendaraan yang berlokasi di Yogyakarta, sebuah kota budaya yang kaya akan sejarah dan pesona alam. Dikenal karena komitmennya dalam menyediakan pengalaman perjalanan
            yang nyaman dan aman bagi pelanggan, Cahaya Waskitha Transport menawarkan berbagai pilihan kendaraan yang terawat dengan baik, mulai dari mobil keluarga hingga motor untuk petualangan pribadi.
          </p>
          <div class="image-row">
            <div class="image-with-text">
              <img src="assets/company.png" alt="Image 1" class="img-fluid" />
              <p>Cahaya Waskitha Transport</p>
            </div>
            <div class="image-with-text">
              <img src="assets/user.png" alt="Image 2" class="img-fluid" />
              <p>Bayu Waskitha Transport</p>
            </div>
            <div class="image-with-text">
              <img src="assets/location.png" alt="Image 3" class="img-fluid" />
              <p>Daerah Istimewa Yogyakarta</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container mt-5">
      <h2 class="text-center mb-4">Mengapa Memilih Kami</h2>
      <br /><br />
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="image-with-title">
            <img src="assets/driver.png" class="img-fluid mb-2" alt="Image 1" />
            <h5>Driver yang berpengalaman dan profesionalisme</h5>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="image-with-title">
            <img src="assets/car.png" class="img-fluid mb-2" alt="Image 2" />
            <h5>Kendaraan yang terawat dengan baik</h5>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="image-with-title">
            <img src="assets/car_repair.png" class="img-fluid mb-2" alt="Image 3" />
            <h5>Pelayanan yang ramah serta menjunjung profesioanlisme</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <h2 class="text-center mb-4">Our Gallery</h2>
      <br /><br />
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="image-container">
            <img src="assets/galeri.png" class="img-fluid mb-2" alt="Image 1" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="image-container">
            <img src="assets/galeri.png" class="img-fluid mb-2" alt="Image 2" />
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="image-container">
            <img src="assets/galeri.png" class="img-fluid mb-2" alt="Image 3" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="image-container">
            <img src="assets/galeri.png" class="img-fluid mb-2" alt="Image 4" />
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="image-container">
            <img src="assets/galeri.png" class="img-fluid mb-2" alt="Image 5" />
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER START -->
    <footer class="foot bg-light text-black text-center pt-4 pb-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6" style="font-size: 30px">
            <p>Cahaya Waskitha Transport</p>
          </div>
          <div class="col-lg-12 mb-5">
            <a href="https://maps.app.goo.gl/HsnJf1b2Ks7Stm4V8" target="_blank" style="font-size: 10px; text-decoration: none">Jl. Nogosari No.2, Nogosari I, Wukirsari, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782</a>
          </div>
          <div class="row justify-content-center">
            <div class="col-10 d-flex justify-content-center">
              <div class="col-2">
                <a href="https://www.instagram.com/cahaya_waskitha?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                  <img src="assets/Instagram.png" alt="Instagram" />
                </a>
              </div>
              <div class="col-2">
                <a href="" target="_blank">
                  <img src="assets/Youtube.png" alt="Youtube" />
                </a>
              </div>
              <div class="col-2">
                <a href="https://wa.me/628562711129" target="_blank">
                  <img src="assets/Whatsapp.png" alt="Whatsapp" />
                </a>
              </div>
              <div class="col-2">
                <a href="" target="_blank">
                  <img src="assets/Facebook.png" alt="Facebook" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mt-5 text-end">
            <a href="login_admin.html" style="text-decoration: none; color: black">Login as Admin</a>
          </div>
          <div class="col-lg-12 mt-2">
            <p>&copy; 2024 CahayaWaskitha. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER END -->
    @endsection