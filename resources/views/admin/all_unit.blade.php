@extends('admin.layouts.main')
    @section('container')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">All Unit</h1>
                        <a href="/dashboard-units/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i>  Add Unit</a>
                    </div>
                    {{-- Search --}}
                    <div class="row justify-content-center">
                        <div class="col-md-6 mt-4">
                            <form action="/dashboard-units" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" value=" {{request('search')}} ">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        {{-- Alert --}}
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Daftar Unit</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-dark font-weight-bold" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>ID Unit</th>
                                                        <th>Nama Unit</th>
                                                        <th>Kategori</th>
                                                        <th>Photo</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($units as $unit)
                                                        <tr>
                                                            <td>{{ $unit->id }}</td>
                                                            <td>{{ $unit->name }}</td>
                                                            <td>{{ $unit->category->name }}</td>
                                                            <td>
                                                                @if ($unit->image)
                                                                    <img src="{{ asset('storage/' . $unit->image) }}" style="width: 100px;" alt="gambar unit">            
                                                                @else
                                                                    @if ($unit->category->name == 'car' || $unit->category->name == 'Car')
                                                                        <img src="{{ asset('assets/car.png') }}" alt="Gambar Unit" style="width: 100px;">
                                                                    @elseif ($unit->category->name == 'motorcycle' || $unit->category->name == 'Motorcycle')
                                                                        <img src="{{ asset('assets/motorcycle.png') }}" alt="Gambar Unit" style="width: 100px;">
                                                                    @else
                                                                        <img src="https://picsum.photos/100" alt="Gambar Unit" style="width: 100px;">
                                                                    @endif   
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="/dashboard-units/{{ $unit->slug }}/edit" class="badge bg-primary">
                                                                    <i data-feather="edit"></i>
                                                                </a>
                                                                <form action="/dashboard-units/{{ $unit->slug }}" method="POST" class="d-inline">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                                                        <span data-feather="trash"></span>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{$units->links()}}
                        </div>
                    </div>     
        
 @endsection