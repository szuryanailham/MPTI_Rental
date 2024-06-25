@extends('admin.layouts.main')
    @section('container')

                    <!-- Page Heading -->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-dark font-weight-bold">Dashboard</h1>
                        <a href="/add-unit" class="btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i>  Add Unit
                        </a>
                    </div>



                    <!-- Content Row -->
                    <div class="row">
                        <!-- Open Order Card START -->
                        <div class="col-xl-4 col-lg-6 mb-4" >
                            <div class="card py-2" style="background-color: #3D74B4;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center" >
                                        <div class="col mr-2">
                                            <div class="h2 mb-0 font-weight-bold text-white"> {{$openTransactions}} </div>
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Open Order</div>
                                        </div>
                                        <div class="col-auto">
                                            <i>
                                                <img src="{{asset('assets/Group.png')}}" alt="">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Open Order Card END -->

                        <!-- Total Order Card START -->
                        <div class="col-xl-4 col-lg-6 mb-4">
                            <div class="card py-2"  style="background-color: #3D74B4;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h2 mb-0 font-weight-bold text-white">Rp.{{$totalTransactions}}</div>
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Total Order</div>
                                        </div>
                                        <div class="col-auto">
                                            <i>
                                                <img src="assets/card.png" alt="">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Order Card END -->

                        <!-- People Order Card START -->
                        <div class="col-xl-4 col-lg-6 mb-4">
                            <div class="card py-2" style="background-color: #3D74B4;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h2 mb-0 font-weight-bold text-white"> {{$peopleTransactions}} </div>
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                People Order</div>
                                        </div>
                                        <div class="col-auto">
                                            <i>
                                                <img src="{{asset('assets/people.png')}}" alt="">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- People Order Card END -->
                    </div>
   
  @endsection