@extends('layouts.main')
    @section('container')
    <!-- FORM LOGIN START -->
    <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col text-center">
                    <img src="assets/admin.png" alt="">
                </div>
            </div>
            <form class="mt-5">
                <div class="col text-center">
                    <p class="desc" style="color: black; font-weight: 700; font-size: 17px;">Login as Admin</p>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-4 text-center">
                        <a href="admin/index.html" target="_blank">
                            <button type="button" class="btn btn-dark">Submit</button>
                        </a>
                        
                    </div>
                </div>
              </form>
        </div>
        
    <!-- FORM LOGIN END -->

    <!-- FOOTER START -->
        <footer class="foot bg-light text-black text-center pt-4 pb-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" style="font-size: 30px;">
                <p>Cahaya Waskitha Transport</p>
                </div>
                <div class="col-lg-12 mb-5">
                <a href="https://maps.app.goo.gl/HsnJf1b2Ks7Stm4V8" target="_blank" style="font-size: 10px; text-decoration: none;">Jl. Nogosari No.2, Nogosari I, Wukirsari, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782</a>
                </div>
                <div class="row justify-content-center">
                <div class="col-1">
                    <a href="https://www.instagram.com/cahaya_waskitha?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                    <img src="assets/Instagram.png" alt="Instagram">
                    </a>
                </div>
                <div class="col-1">
                    <a href="" target="_blank">
                    <img src="assets/Youtube.png" alt="Youtube">
                    </a>
                </div>
                <div class="col-1">
                    <a href="https://wa.me/628562711149" target="_blank">
                    <img src="assets/Whatsapp.png" alt="Whatsapp">
                    </a>
                </div>
                <div class="col-1">
                    <a href="" target="_blank">
                    <img src="assets/Facebook.png" alt="Facebook">
                    </a>
                </div>
                </div>
                <div class="col-lg-12 mt-5 text-end">
                <a href="login_admin.html" style="text-decoration: none; color: black;">Login as Admin</a>
                </div>
                <div class="col-lg-12">
                <p>&copy; 2024 CahayaWaskitha. All rights reserved.</p>
                </div>
            </div>
            </div>
        </footer>
      <!-- FOOTER END -->
    @endsection