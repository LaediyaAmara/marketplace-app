<!DOCTYPE html>
<html lang="id">
<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panduan Jual Beli</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0052cc;
      background-image: radial-gradient(#ffffff20 1px, transparent 1px);
      background-size: 20px 20px;
      font-family: Arial, sans-serif;
    }
    .speech-bubble {
      background-color: #ffd633;
      display: inline-block;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: bold;
      font-size: 1.5rem;
      position: relative;
      color: #0052cc;
    }
    .speech-bubble::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 20px;
      border-width: 15px 15px 0;
      border-style: solid;
      border-color: #ffd633 transparent transparent transparent;
    }
    .about-box {
      background-color: white;
      border-radius: 15px;
      padding: 20px;
      margin-top: 20px;
    }
    .circle-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid white;
    }
    .step {
      padding: 10px;
      border-left: 4px solid #0052cc;
      margin-bottom: 15px;
      background-color: #f8f9fa;
      border-radius: 8px;
    }
    .step h6 {
      color: #0052cc;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div class="container my-4">
    <a href="{{ url('Home') }}" class="text-decoration-none text-secondary mb-3 d-block">
        ← Kembali
    </a>
<div class="container py-5">
  <div class="text-start">
    <div class="speech-bubble">Panduan Jual Beli</div>
  </div>

  <div class="about-box shadow">
    <h4 class="fw-bold text-primary mb-3"> Nazt Preloved</h4>
    <p class="mb-4">Ikuti panduan berikut untuk mempermudah transaksi di aplikasi preloved baju.</p>
    
    <h5 class="fw-bold text-primary mb-3">👕 Untuk Penjual</h5>
    <div class="step">
      <h6>1. Buat Akun</h6>
      <p>Daftarkan diri Anda di aplikasi dengan data lengkap dan benar.</p>
    </div>
    <div class="step">
      <h6>2. Upload Produk</h6>
      <p>Tambahkan foto baju preloved, isi deskripsi, ukuran, kondisi, dan harga.</p>
    </div>
    <div class="step">
      <h6>3. Kelola Pesanan</h6>
      <p>Cek notifikasi jika ada pembeli. Konfirmasi dan siapkan barang untuk dikirim.</p>
    </div>
    <div class="step">
      <h6>4. Kirim Barang</h6>
      <p>Gunakan jasa ekspedisi terpercaya dan unggah resi pengiriman di aplikasi.</p>
    </div>

    <h5 class="fw-bold text-primary mt-4 mb-3">🛒 Untuk Pembeli</h5>
    <div class="step">
      <h6>1. Cari Produk</h6>
      <p>Gunakan fitur pencarian atau filter untuk menemukan baju preloved sesuai kebutuhan.</p>
    </div>
    <div class="step">
      <h6>2. Tambahkan ke Keranjang</h6>
      <p>Pilih produk, lalu klik <strong>Beli</strong> atau <strong>Tambah ke Keranjang</strong>.</p>
    </div>
    <div class="step">
      <h6>3. Lakukan Pembayaran</h6>
      <p>Pilih metode pembayaran (transfer bank / e-wallet) dan konfirmasi transaksi.</p>
    </div>
    <div class="step">
      <h6>4. Terima Barang</h6>
      <p>Tunggu barang dikirim ke alamat Anda. Pastikan untuk memberi ulasan setelah barang diterima.</p>
    </div>
    
    <div class="alert alert-info mt-4" role="alert">
      ✨ Tips: Selalu periksa deskripsi produk dengan teliti sebelum membeli, dan gunakan fitur chat untuk berkomunikasi dengan penjual.
    </div>
    
  </div>
</div>

</body>
</html>
