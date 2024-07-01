<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
        }
        .text-right {
            text-align: right;
        }
        .center-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
   
    <div class="container my-5" id="orderDetails">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <img src="{{asset('assets/logo_cw.png')}}" alt="logo">
                    @if(session('success'))
                        <div class="center-content">
                            <h3 class="card-title text-center">Pemesanan berhasil</h3>
                        </div>
                        <img src="assets/check.png" alt="success" width="50px">
                    @endif
                </div>
                
                <hr>
                @if ($transactionData)
                <div class="mb-3">
                    <h5 class="text-right">Total Order</h5>
                    <h3 class="text-right">Rp. {{ $transactionData['total'] }}</h3>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <p><strong>Kode Transaksi: </strong>{{ $transactionData['code'] }}</p>
                        <p><strong>Nama Pemesan: </strong>{{ $transactionData['name'] }}</p>
                        <p><strong>Nama Unit: </strong>{{ $transactionData['unit_name'] }}</p>
                        <p><strong>Tanggal Sewa: </strong>{{ $transactionData['start_date'] }}</p>
                        <p><strong>Tanggal Kembali: </strong>{{ $transactionData['end_date'] }}</p>
                        <p><strong>Jam Sewa: </strong>{{ $transactionData['start_time'] }} WIB</p>
                        <p><strong>Jam Kembali: </strong>{{ $transactionData['end_time'] }} WIB</p>
                    </div>
                @else
                    <p>Transaksi gagal, coba lagi</p>
                    <a href="/" class="btn btn-dark">Back</a>
                @endif
            
                
                <hr>
                <div class="text-center">
                    <p>Silahkan cetak struk bukti pemesanan rental dan hubungi admin jika ada pertanyaan</p>
                    <a href="https://wa.me/628562711129" class="btn btn-success">+628562711129 <img src="{{asset('assets/Whatsapp.png')}}" alt="Whatsapp"></a>
                </div>
            </div>
        </div>
    </div>
    {{-- <button id="download-pdf" class="btn btn-dark">Download PDF</button> --}}

    <!-- Skrip jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <!-- Skrip html2canvas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        @if($transactionData)
        window.addEventListener('load', function() {
            const element = document.getElementById('orderDetails'); // Mengambil elemen HTML yang akan dikonversi menjadi PDF

            html2canvas(element, {
                useCORS: true, // Menggunakan opsi useCORS jika diperlukan
                logging: true, // Aktifkan logging jika diperlukan
                willReadFrequently: true, // Mengoptimalkan operasi pengambilan gambar
                proxy: 'https://html2canvas.proxyhost.com/' // Menambahkan proxy jika diperlukan
            }).then(function(canvas) {
                const imgData = canvas.toDataURL('image/png'); // Mengonversi canvas menjadi data gambar PNG
                const pdf = new jsPDF(); // Menginisialisasi objek jsPDF

                // Menghitung ukuran PDF berdasarkan proporsi kontainer
                const margin = 20; 
                const pdfWidth = pdf.internal.pageSize.getWidth() - 2 * margin;
                const pdfHeight = (canvas.height * pdfWidth) / canvas.width;

                // Menambahkan gambar ke dalam PDF dengan margin
                pdf.addImage(imgData, 'PNG', margin, margin, pdfWidth, pdfHeight);

                // Menyimpan PDF dengan nama 'order.pdf'
                pdf.save('order.pdf');

                // Set timeout untuk kembali ke halaman utama setelah 2 detik
                setTimeout(function() {
                    window.location.href = '/';
                }, 2000); // 2000 milliseconds = 2 seconds
            });
        });
        @endif
    </script>
</body>
</html>
