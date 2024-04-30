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
                <a href="/order" target="_blank" class="btn btn-dark">Rent Now</a>
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

    @endsection