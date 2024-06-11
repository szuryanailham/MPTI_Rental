@extends('admin.layouts.main')
    @section('container')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Transaction</h1>
                        <a href="add_unit.html"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add Unit</a>
                    </div>

                    <!-- Daftar Transaksi Pemesanan -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi Pemesanan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-dark font-weight-bold" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID Pemesanan</th>
                                                    <th>Gambar Unit</th>
                                                    <th>Nama Unit</th>
                                                    <th>Kategori Unit</th>
                                                    <th>Nama Peminjam</th>
                                                    <th>Nomor Telefon Peminjam</th>
                                                    <th>Alamat Peminjam</th>
                                                    <th>Harga Total Peminjam</th>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Tanggal Akhir</th>
                                                    <th>Lokasi Awal Peminjaman</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Data transaksi pemesanan akan ditampilkan di sini -->
                                                @foreach ($transactions as $transaction)
                                                    <tr>
                                                        <td>{{$transaction->id}}</td>
                                                        <td>
                                                            @if ($transaction->unit->image)
                                                                <img src="{{asset('storage/'. $unit->image)}}" style="width: 100px;" alt="gambar unit">            
                                                            @else
                                                                @if ($transaction->unit->category->name == 'car' || $transaction->unit->category->name == 'Car') 
                                                                    <img src="{{asset('assets/car.png')}}" alt="Gambar Unit" style="width: 100px;"> 
                                                                @elseif ($transaction->unit->category->name == 'motorcycle' || $transaction->unit->category->name == 'Motorcycle') 
                                                                    <img src="{{asset('assets/motorcycle.png')}}" alt="Gambar Unit" style="width: 100px;"> 
                                                                @else
                                                                    <img src="https://picsum.photos/200" alt="Gambar Unit" style="width: 100px;">
                                                                @endif   
                                                            @endif
                                                        </td>
                                                        <td>{{ optional($transaction->unit)->name }}
                                                        </td>
                                                        <td>{{ optional(optional($transaction->unit)->category)->name }}</td>
                                                        <td>{{$transaction->name}}</td>
                                                        <td>{{$transaction->phone_number}}</td>
                                                        <td>{{$transaction->address}}</td>
                                                        <td>{{$transaction->total}}</td>
                                                        <td>{{$transaction->start_date}}</td>
                                                        <td>{{$transaction->end_date}}</td>
                                                        <td>{{$transaction->pickup_address}}</td>
                                                        <td>{{$transaction->status}}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <button class="btn btn-primary btn-sm flex-fill me-2">Edit</button>
                                                                <button class="btn btn-danger btn-sm flex-fill">Delete</button>
                                                            </div>
                                                            
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    
  @endsection