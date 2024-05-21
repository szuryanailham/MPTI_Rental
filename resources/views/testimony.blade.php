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

    @endsection