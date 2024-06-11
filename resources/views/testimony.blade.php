@extends('layouts.main')
    @section('container')
    <link rel="stylesheet" href="css/style_testimony.css">
    <script src="js/testimony.js"></script>
    <!-- RATING CONTENT START -->
    <div class="container mt-2 p-5 mb-5">
      <h2 class="text-center">Top Testimony</h2><br><br>
      @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
      @endif
      <div class="row mb-4 g-3">

        @foreach ($testimonies as $testimony)
          <div class="col-md-4 mb-9">
            <div class="card text-center " >
              <img src="assets/admin.png" class="card-img-top mt-2 img-fluid mx-auto" alt="Testimonial">
              <div class="card-body">
                @if ($testimony->rating == 1.0)
                  <p class="card-text"><span class="text-warning">&#9733; &#9734; &#9734; &#9734; &#9734;</span> {{$testimony->rating}} </p>
                @endif
                @if ($testimony->rating == 2.0)
                  <p class="card-text"><span class="text-warning">&#9733; &#9733; &#9734; &#9734; &#9734;</span> {{$testimony->rating}} </p>
                @endif
                @if ($testimony->rating == 3.0)
                  <p class="card-text"><span class="text-warning">&#9733; &#9733; &#9733; &#9734; &#9734;</span> {{$testimony->rating}} </p>
                @endif
                @if ($testimony->rating == 4.0)
                  <p class="card-text"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> {{$testimony->rating}} </p>
                @endif
                @if ($testimony->rating == 5.0)
                  <p class="card-text"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span> {{$testimony->rating}} </p>
                @endif
                <h5 class="card-title"> {{$testimony->name}} </h5>
                <p class="card-text"> {{$testimony->description}} </p>
              </div>
            </div>
          </div> 
        @endforeach
        
      </div>

      {{$testimonies->links()}}

    </div>
    <!-- RATING CONTENT END -->

    <!-- FORM RATING START -->
    <div class="row mt-5">
      <div class="col mx-auto text-center">
          <h4 style="text-decoration: underline;">Form Testimoni</h4>
          <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info testimoni</p>
      </div>
    </div>

    <form action="/testimony" method="POST">
      @csrf
      <div class="row ms-5 me-5 mb-3">
        <div class="mb-3">
          <div class="rating">
            <label for="rating" class="form-label @error('rating') is-invalid @enderror">Rating</label>
            <input type="number" name="rating" class="form-control" value="{{old('rating')}}" hidden><br>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            @error('rating')
                <div class="invalid-feedback">
                    {{$message}}
                </div>    
            @enderror
          </div>
        </div>
          <div class="mb-3">
            <label for="name" class="form-label @error('name') is-invalid @enderror">Nama</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" value="{{old('name')}}">
            @error('name')
              <div class="invalid-feedback">
                  {{$message}}
              </div>    
            @enderror
          </div>
          <div class="mb-3">
            <label for="comment" class="form-label @error('comment') is-invalid @enderror">Komentar</label>
            <textarea name="comment" class="form-control" id="comment" placeholder="Komentar disini..." cols="30" rows="5">{{old('comment')}}</textarea>
            @error('comment')
                <div class="invalid-feedback">
                    {{$message}}
                </div>    
              @enderror
          </div>

      </div>

      <div class="row mb-5 justify-content-center">
        <div class="col-4 text-center">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
      </div> 
    </form>
           
               
    <!-- FORM RATING END -->

    @endsection