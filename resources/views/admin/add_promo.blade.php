@extends('admin.layouts.main')
    @section('container')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Add Promo</h1>
                        <a href="add_unit.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i>  Add Unit</a>
                    </div>

                    <div class="text-dark">
                        <div>
                            <p>Kode Promo</p>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div><br>
                        <div>
                            <p>Nama Promo</p>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div><br>
                        <div>
                            <p>Upload Banner Promo</p>
                    
                        </div><br>
                    </div>
                    

@endsection