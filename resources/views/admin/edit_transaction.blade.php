@extends('admin.layouts.main')
    @section('container')
        <style>
            .input-width, .custom-select{
                width: 250px; !important
            }
            
        </style>
   
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Transaction</h1>
                        <a href="add_unit.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                        <div class="hidden-input">
                                            <input type="number" name="duration" id="duration" value="{{old('duration', $transaction->duration )}}" hidden readonly>
                                            <input type="number" name="price" class="form-control" id="price" placeholder="price" value="{{ old('price', $transaction->unit->price) }}" hidden readonly>
                                        </div>
                                        <table class="table table-bordered text-dark font-weight-bold" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Kode</th>
                                                    <th>Gambar</th>
                                                    <th>Unit</th>
                                                    <th>Nama</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Alamat</th>
                                                    <th>Total</th>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Tanggal Berakhir</th>
                                                    <th>Lokasi Peminjaman</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <form action="/transaction/{{$transaction->id}}" method="POST">
                                                @method('PUT')
                                                @csrf

                                                <tbody>
                                                    <!-- Data transaksi pemesanan akan ditampilkan di sini -->
                                                    <tr>
                                                        <td>{{$transaction->code}}</td>
                                                        <td>
                                                            @if ($transaction->unit->image)
                                                                <img src="{{asset('storage/'. $unit->image)}}" style="width: 100px;" alt="gambar unit">            
                                                            @else
                                                                @if ($transaction->unit->category->name == 'car' || $transaction->unit->category->name == 'Car') 
                                                                    <img src="{{asset('assets/car.png')}}" alt="Gambar Unit" style="width: 100px;"> 
                                                                @elseif ($transaction->unit->category->name == 'motorcycle' || $transaction->unit->category->name == 'Motorcycle') 
                                                                    <img src="{{asset('assets/motorcycle.png')}}" alt="Gambar Unit" style="width: 100px;"> 
                                                                @else
                                                                    <img src="https://picsum.photos/100" alt="Gambar Unit" style="width: 100px;">
                                                                @endif   
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <select id="unit_id" name="unit_id" class="form-select custom-select @error('unit_id') is-invalid @enderror" required>
                                                                @foreach ($units as $unit)
                                                                    @if (old('unit_id', $transaction->unit) == $unit->id)
                                                                        <option value="{{$unit->id}}" selected> {{$unit->name}} - {{$unit->category->name}}</option>
                                                                    @else
                                                                        <option value="{{$unit->id}}"> {{$unit->name}} - {{$unit->category->name}}</option>
                                                                    @endif      
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="name" class="form-control input-width @error('name') is-invalid @enderror" id="name" value="{{old('name', $transaction->name )}}" required>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="phone_number" class="form-control input-width @error('phone_number') is-invalid @enderror" id="phone_number" value="{{old('phone_number', $transaction->phone_number )}}" required>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="address" class="form-control input-width @error('address') is-invalid @enderror" id="address" value="{{old('address', $transaction->address )}}" required>
                                                        </td>
                                                        <td>
                                                            <input type="number" name="total" class="form-control input-width @error('total') is-invalid @enderror" id="total" value="{{old('total', $transaction->total )}}" readonly required>
                                                            @error('total')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>  
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input type="date" name="start_date" class="form-control input-width @error('start_date') is-invalid @enderror" id="start_date" value="{{old('start_date', $transaction->start_date )}}" required>
                                                            @error('start_date')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>  
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input type="date" name="end_date" class="form-control input-width @error('end_date') is-invalid @enderror" id="end_date" value="{{old('end_date', $transaction->end_date )}}" required>
                                                            @error('end_date')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>  
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pickup_address" class="form-control input-width @error('pickup_address') is-invalid @enderror" id="pickup_address" value="{{old('pickup_address', $transaction->pickup_address )}}" required>
                                                            @error('pickup_address')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>  
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input type="text" name="status" class="form-control input-width @error('pickup_address') is-invalid @enderror" id="status" value="{{old('status', $transaction->status )}}" required>
                                                            @error('status')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>  
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <button type="submit" class="btn btn-dark btn-sm">Save</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </form>
                                            
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 <script>
    document.addEventListener('DOMContentLoaded', function() {
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');
        const durationInput = document.getElementById('duration');
        const priceInput = document.getElementById('price'); // Ambil elemen input harga per hari

        // Set minimum value for start_date to today's date
        const today = new Date().toISOString().split('T')[0];
        startDateInput.setAttribute('min', today);

        startDateInput.addEventListener('change', function() {
            const selectedDate = new Date(startDateInput.value);
            const todayDate = new Date();

            // Validate if selectedDate is today or a future date
            if (selectedDate < todayDate) {
                alert('Tanggal mulai harus hari ini atau tanggal selanjutnya.');
                startDateInput.value = today; // Set back to today's date
            }

            // Set minimum value for end_date to start_date + 1 day
            const minEndDate = new Date(selectedDate);
            minEndDate.setDate(selectedDate.getDate() + 1);
            endDateInput.setAttribute('min', minEndDate.toISOString().split('T')[0]);
            
            // Reset end_date if it's before the new minEndDate
            if (new Date(endDateInput.value) < minEndDate) {
                endDateInput.value = '';
            }

            // Calculate and update duration
            calculateDaysDifference();
        });

        endDateInput.addEventListener('change', function() {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            // Validate if end date is after start date
            if (endDate <= startDate) {
                alert('Tanggal berakhir harus lebih besar dari tanggal mulai.');
                endDateInput.value = ''; // Clear the end date input
            }

            // Calculate and update duration
            calculateDaysDifference();
        });

        function calculateDaysDifference() {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            if (startDate && endDate && endDate >= startDate) {
                const timeDifference = endDate - startDate;
                const dayDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24)); // Hitung jumlah hari bulat ke bawah

                console.log(timeDifference);
                console.log(dayDifference);

                //durationInput.value = `${dayDifference} hari`; // Tampilkan dalam format hari dan jam

                // Ambil harga per hari dari input
                const price = parseInt(priceInput.value);
                console.log(price);

                // Hitung total harga
                const total = Math.floor(dayDifference * price) ;

                // Tampilkan total harga dalam elemen input total-price
                document.getElementById('total').value = total; // Format dengan dua angka di belakang koma

                document.getElementById('duration').value = dayDifference;
            } else {
                durationInput.value = ''; // Jika startDate atau endDate tidak valid, atur nilai durationInput menjadi kosong
                document.getElementById('total').value = ''; // Jika startDate atau endDate tidak valid, atur nilai total-price menjadi kosong
            }
        }

    });

</script>                  

    
  @endsection