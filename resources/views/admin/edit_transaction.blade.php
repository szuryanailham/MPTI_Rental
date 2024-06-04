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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Data transaksi pemesanan akan ditampilkan di sini -->
                        
                                                    <tr>
                                                        <td>{{$transaction->id}}</td>
                                                        <td><img src="gambar_unit.jpg" alt="Gambar Unit" style="width: 100px;"></td>
                                                        <td>
                                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name', optional($transaction->unit)->name )}}" required autofocus>
                                                            {{ optional($transaction->unit)->name }}
                                                        </td>
                                                        <td>{{ optional(optional($transaction->unit)->category)->name }}</td>
                                                        <td>
                                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name', $transaction->name )}}" required autofocus>
                                                            {{$transaction->name}}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" value="{{old('phone_number', $transaction->phone_number )}}" required autofocus>
                                                            {{$transaction->phone_number}}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{old('address', $transaction->address )}}" required autofocus>
                                                            {{$transaction->address}}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" id="total" value="{{old('total', $transaction->total )}}" required autofocus>
                                                            {{$transaction->total}}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="start_date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" value="{{old('start_date', $transaction->start_date )}}" required autofocus>
                                                            {{$transaction->start_date}}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="end_date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{old('end_date', $transaction->end_date )}}" required autofocus>
                                                            {{$transaction->end_date}}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pickup_address" class="form-control @error('pickup_address') is-invalid @enderror" id="pickup_address" value="{{old('pickup_address', $transaction->pickup_address )}}" required autofocus>
                                                            {{$transaction->pickup_address}}
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm">Edit</button>
                                                            <button class="btn btn-danger btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                            
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    
  @endsection