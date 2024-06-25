@extends('admin.layouts.main')
    @section('container')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Add Promo</h1>
                        <a href="add_unit.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i>  Add Unit</a>
                    </div>

                    <form action="/add-promo" method="POST" enctype="multipart/form-data">
                        <div class="text-dark">
                            <div>
                                <label>Kode Promo</label>
                                <input type="text" name="code" class="form-control" id="code">
                            </div><br>
                            <div>
                                <label>Nama Promo</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div><br>
                            <div>
                                <label>Upload Banner Promo</label>
                                <input type="file" name="banner" class="form-control" id="banner">                                
                            </div><br>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </div>

                        </div>
                    </form>
                    
                    

@endsection