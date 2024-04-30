@extends('layouts.main')
    @section('container')
    <!-- FORM LOGIN START -->
    <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col text-center">
                    <img src="assets/admin.png" alt="">
                </div>
            </div>
            {{-- FORM FOR LOGIN ADMIN --}}
            <form class="mt-5" method="POST" action="login">
                @csrf
                <div class="col text-center">
                    <p class="desc" style="color: black; font-weight: 700; font-size: 17px;">Login as Admin</p>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username"  value="{{old('username')}}" required autofocus>
                    @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label @error('password') is-invalid @enderror">Password</label>
                  <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-4 text-center">
                        <button type="submit" class="btn btn-dark">Submit</button>    
                    </div>
                </div>
              </form>
        </div>
        
    <!-- FORM LOGIN END -->

    @endsection