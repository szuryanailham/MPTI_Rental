@extends('admin.layouts.main')
    @section('container')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-dark">
                        <h1 class="h3 mb-0 text-dark font-weight-bold">Edit Unit</h1>
                    </div>
                    {{-- FORM EDIT UNIT --}}
                    <form action="/dashboard-units/{{$unit->slug}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="text-dark">
                            <label for="name" class="form-label">Nama unit</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name', $unit->name)}}" required autofocus>
                        </div><br>
                        <div class="text-dark">
                            <label for="slug" class="form-label">Slug</label>
                            <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{old('slug', $unit->slug)}}" required>
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                            @enderror
                        </div><br>
                        <div class="d-flex text-dark align-items-center select-wrapper">
                            <label for="category_id" class="form-label mr-2">Kategori</label>
                            <select id="category" name="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
                                @foreach ($categories as $category)
                                    @if (old('category_id', $unit->category) == $category->id)
                                        <option value="{{$category->id}}" selected> {{$category->name}} </option>
                                    @else
                                        <option value="{{$category->id}}"> {{$category->name}} </option>
                                    @endif      
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                            @enderror      
                        </div><br>
                        <div class="text-dark">
                            <label for="price" class="form-label">Harga</label>
                            <input type="number" name="price" class="form-control @error('harga') is-invalid @enderror" value="{{old('price', $unit->price)}}" required><br>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                            @enderror
                        </div>
                        <div class="container">
                            <div class="d-flex text-dark align-items-center select-wrapper">
                                <label for="jenis" class="form-label mr-2">Jenis</label>
                                <select id="jenis" class="form-select" name="jenis">
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </div>
                            <div class="d-flex text-dark align-items-center select-wrapper">
                                <label for="kendali" class="form-label mr-2">Kendali</label>
                                <select id="kendali" class="form-select" name="kendali">
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </div>
                            <div class="d-flex text-dark align-items-center">
                                <label for="capacity" class="form-label mr-2 @error('capacity') is-invalid @enderror">Capacity</label>
                                <input type="number" name="capacity" class="form-control capacity" value="{{old('capacity', $unit->capacity)}}" required>
                                @error('capacity')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                            @enderror
                            </div>
                        </div><br>
                        {{-- <div class="text-dark">
                            <label for="image" class="form-label @error('image') is-invalid @enderror">Upload gambar</label>
                            <input type="file" name="image" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><br>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                            @enderror
                        </div> --}}
                        <div class="text-dark">
                            <label for="description" class="form-label @error('description') is-invalid @enderror">Penjelasan</label>
                            <textarea name="description" class="form-control" required>{{old('description', $unit->description)}}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                            @enderror
                        </div><br>
                        <button type="submit" class="btn btn-dark mb-4" style="display: block; margin: 0 auto;">Update</button>
                    </form>   
                    {{-- END FORM EDIT UNIT --}}

                    
        <script>
            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function(){
                fetch('/add-unit/checkSlug?name='+name.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });
        </script>
    @endsection