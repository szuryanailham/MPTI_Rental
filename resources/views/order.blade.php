@extends('layouts.main')
    @section('container')
    <!-- FORM ORDER START -->

    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-4  mx-auto text-center">
                <img src="{{asset('assets/wa.png')}}" alt="" class="img-fluid ">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 mx-auto text-center">
                <p class="title" style="font-weight: 700; font-size: 30px;">Bayu Waskitha</p>
                <p class="desc" style="font-size: 20px;">NISMO has become the embodiment of Nissan's outstanding performance, inspired by the most unforgiving proving ground, the "race track".</p>
            </div>
        </div>
        <div class="row">
            <div class="col mx-auto text-center">
                <a href="https://wa.me/628562711129" target="_blank" class="title btn btn-dark ">Contact Us</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col mx-auto text-center">
                <a href="/detail">
                    <i class="bi bi-arrow-left-square-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
                      </svg>
                </a>
            </div>
        </div>

        @if (session()->has('success'))
          <div class="alert alert-success mt-3" role="alert">
            {{session('success')}}
          </div>
        @endif

         {{-- FILL IN THE FORM  --}}
        <form action="/order/{{$unit->slug}}" method="POST" >
          @csrf
                <!-- PENYEWAAN START -->
                <div class="row mt-5">
                  <div class="col mx-auto text-center">
                      <h4 style="text-decoration: underline;">Form Penyewaan</h4>
                      <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info penyewaan</p>
                  </div>
                </div>
                <div class="hidden-input">
                    <input type="number" name="unit_id" class="form-control" id="unit_id" value="{{ old('unit_id', $unit->id) }}" readonly hidden required>
                    <input type="text" name="status" class="form-control" id="status" value="{{ old('status', 'open') }}" readonly hidden>
                </div>
                <div class="row ">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Nama Lengkap">
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}" placeholder="Alamat">
                        @error('address')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="phone_number" class="form-label">No. Handphone</label>
                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" value="{{ old('phone_number') }}" placeholder="No. Handphone">
                        @error('phone_number')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                        @enderror
                      </div>
                      <div class="row mb-3 d-flex justify-content-center">
                        <div class="col-md-3">
                            <label for="unit_name" class="form-label">Unit</label>
                            <input type="text" name="unit_name" class="form-control @error('unit_name') is-invalid @enderror" id="unit_name" placeholder="Unit" value="{{ old('unit_name', $unit->name) }}" readonly required>
                            @error('unit_name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="price" class="form-label @error('price') is-invalid @enderror">Harga Sewa</label>
                            <div class="input-group">
                                <input type="number" name="price" class="form-control" id="price" placeholder="price" value="{{ old('price', $unit->price) }}" readonly>
                                <span class="input-group-text">/hari</span>
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>  
                                @enderror
                            </div>                        
                        </div>
                    </div>
                    
                </div>            
            <!-- PENYEWAAN END -->
    
            <!-- PENJEMPUTAN START -->
            <div class="row mt-5">
                <div class="col mx-auto text-center">
                    <h4 style="text-decoration: underline;">Penjemputan</h4>
                    <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info penjemputan</p>
                </div>
            </div>
            <div class="row ">
                <div class="mb-3">
                    <label for="pickup_address" class="form-label">Lokasi</label>
                    <input type="text" name="pickup_address" class="form-control @error('pickup_address') is-invalid @enderror" id="pickup_address" value="{{ old('pickup_address') }}" placeholder="Lokasi Penjemputan">
                    @error('pickup_address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>  
                    @enderror
                  </div>
                  {{-- <div class="mb-3">
                    <label for="start-time" class="form-label">Waktu</label>
                    <input type="time" name="start-time" class="form-control" id="start-time" placeholder="Waktu Sewa"  >
                  </div> --}}
                  <div class="mb-3">
                    <label for="start_date" class="form-label">Tanggal mulai</label>
                    <input type="datetime-local" name="start_date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" value="{{ old('start_date') }}" placeholder="Tanggal Sewa" required>
                    @error('start_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>  
                    @enderror
                  </div>
            </div>
            <!-- PENJEMPUTAN END  -->
    
            <!-- PENGEMBALIAN START -->
            <div class="row mt-5">
                <div class="col mx-auto text-center">
                    <h4 style="text-decoration: underline;">Pengembalian</h4>
                    <p class="title" style="color: #90A3BF; font-size: 15px;">Masukkan info pengembalian</p>
                </div>
            </div>
            <div class="row ">
                <div class="mb-3">
                    <label for="return_address" class="form-label">Lokasi</label>
                    <input type="text" name="return_address" class="form-control @error('return_address') is-invalid @enderror" id="return_address" value="{{ old('return_address') }}" placeholder="Lokasi Pengembalian" >
                    @error('return_address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>  
                    @enderror
                  </div>
                  {{-- <div class="mb-3">
                    <label for="end-time" class="form-label">Waktu</label>
                    <input type="time" name="end-time" class="form-control" id="end-time" placeholder="Waktu Kumpul"  >
                  </div> --}}
                  <div class="mb-3">
                    <label for="end_date" class="form-label">Tanggal berakhir</label>
                    <input type="datetime-local" name="end_date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{ old('end_date') }}" placeholder="Tanggal Pengembalian" >
                    @error('end_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>  
                    @enderror
                  </div>
            </div>
            <!-- PENGEMBALIAN END  -->
            <!-- TOTAL START -->
            <div class="row mt-5">
                <div class="col mx-auto text-center">
                    <h4 style="text-decoration: underline;">TOTAL</h4>
                    <p class="title" style="color: #90A3BF; font-size: 15px;">Informasi total dan durasi rental</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 mb-3">
                    <label for="total" class="form-label">Total Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" name="total" class="form-control @error('total') is-invalid @enderror" id="total" placeholder="Total" value="{{ old('total') }}" readonly required>
                        @error('total')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                        @enderror
                    </div>                        
                </div>
                <div class="col-md-3 mb-3">
                    <label for="duration-text" class="form-label">Durasi Sewa (hari & jam)</label>
                    <input type="number" name="duration" id="duration" value="{{old('duration')}}" readonly hidden>
                    <input type="text" name="duration-text" class="form-control @error('duration-text') is-invalid @enderror" id="duration-text" placeholder="Durasi Sewa" value="{{ old('duration-text') }}" readonly>
                    @error('duration-text')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>  
                    @enderror
                </div>
            </div>
            <!-- TOTAL END -->
    
            <div class="row mt-5 justify-content-center">
                <div class="col-4 text-center">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </div>
        </form>

    <!-- FORM ORDER END -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');
        const durationInput = document.getElementById('duration-text');
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

                // Hitung sisa jam
                const hoursDifference = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

                durationInput.value = `${dayDifference} hari ${hoursDifference} jam`; // Tampilkan dalam format hari dan jam

                const dayDifferenceFloat = (timeDifference / (1000 * 60 * 60 * 24)).toFixed(2); // Hitung jumlah hari

                // Ambil harga per hari dari input
                const price = parseInt(priceInput.value);

                // Hitung total harga
                const totalPrice = Math.floor(dayDifferenceFloat * price) ;

                // Tampilkan total harga dalam elemen input total-price
                document.getElementById('total').value = totalPrice; // Format dengan dua angka di belakang koma

                document.getElementById('duration').value = dayDifferenceFloat;
            } else {
                durationInput.value = ''; // Jika startDate atau endDate tidak valid, atur nilai durationInput menjadi kosong
                document.getElementById('total').value = ''; // Jika startDate atau endDate tidak valid, atur nilai total-price menjadi kosong
            }
        }
    });

</script>


      @endsection