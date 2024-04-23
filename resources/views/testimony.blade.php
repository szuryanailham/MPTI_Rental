@extends('layouts.main')
    @section('container')
    <!-- RATING CONTENT START -->
    <div class="container mt-2 p-5 mb-5">
      <h2 class="text-center">Top Testimony</h2>
      <br /><br />
      <div class="row">
        <div class="col-md-4 g-2">
          <div class="card text-center">
            <img src="assets/admin.png" class="card-img-top mt-2" alt="Testimonial 1" />
            <div class="card-body">
              <p class="card-text"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> 4.0</p>
              <h5 class="card-title">John Doe</h5>
              <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 g-2">
          <div class="card text-center">
            <img src="assets/admin.png" class="card-img-top mt-2" alt="Testimonial 2" />
            <div class="card-body">
              <p class="card-text"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span> 5.0</p>
              <h5 class="card-title">Jane Doe</h5>
              <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 g-2">
          <div class="card text-center">
            <img src="assets/admin.png" class="card-img-top mt-2" alt="Testimonial 3" />
            <div class="card-body">
              <p class="card-text"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span> 5.0</p>
              <h5 class="card-title">Emily Smith</h5>
              <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- RATING CONTENT END -->

    <!-- FORM RATING START -->
    <div class="row mt-5">
      <div class="col mx-auto text-center">
          <h4 style="text-decoration: underline;">Form Testimoni</h4>
          <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info testimoni</p>
      </div>
    </div>
    <div class="row ms-5 me-5 mb-3">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap"  >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Email">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">No. Handphone</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No. Handphone"  >
          </div>
    </div>
    <div class="row mb-5 justify-content-center">
      <div class="col-4 text-center">
          <button type="button" class="btn btn-dark">Submit</button>
      </div>
  </div>            
    <!-- FORM RATING END -->

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