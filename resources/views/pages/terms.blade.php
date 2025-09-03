<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syarat & Ketentuan</title>
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
    .tc-section {
      margin-bottom: 20px;
    }
    .tc-section h6 {
      color: #0052cc;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div class="container my-4">
    <a href="{{ url('produk') }}" class="text-decoration-none text-secondary mb-3 d-block">
        ← Kembali
    </a>
<div class="container py-5">
  <div class="text-start">
    <div class="speech-bubble">Syarat & Ketentuan</div>
  </div>

  <div class="about-box shadow">
    <h4 class="fw-bold text-primary mb-3">Nazt Preloved</h4>
    <p class="mb-4">Dengan menggunakan aplikasi ini, Anda setuju dengan Syarat & Ketentuan berikut:</p>

    <div class="tc-section">
      <h6>1. Akun Pengguna</h6>
      <p>Setiap pengguna wajib mendaftar dengan data yang benar dan tidak boleh menggunakan identitas palsu.</p>
    </div>

    <div class="tc-section">
      <h6>2. Produk yang Dijual</h6>
      <p>Hanya produk baju preloved yang layak pakai dan sesuai deskripsi yang boleh dijual di aplikasi ini.</p>
    </div>

    <div class="tc-section">
      <h6>3. Transaksi</h6>
      <p>Pembayaran dilakukan melalui metode resmi yang tersedia di aplikasi. Penjual wajib mengirimkan barang sesuai pesanan.</p>
    </div>

    <div class="tc-section">
      <h6>4. Pengiriman</h6>
      <p>Penjual bertanggung jawab atas pengemasan dan pengiriman barang. Resi wajib diunggah setelah barang dikirim.</p>
    </div>

    <div class="tc-section">
      <h6>5. Hak & Kewajiban</h6>
      <p>Pembeli wajib membaca deskripsi produk dengan teliti sebelum membeli. Penjual wajib memberikan informasi yang jelas dan benar.</p>
    </div>

    <div class="tc-section">
      <h6>6. Larangan</h6>
      <p>Dilarang menjual barang terlarang, barang bajakan, atau produk yang tidak sesuai dengan hukum yang berlaku.</p>
    </div>

    <div class="tc-section">
      <h6>7. Penyelesaian Sengketa</h6>
      <p>Jika terjadi perselisihan, penyelesaian dilakukan melalui mediasi antara pembeli dan penjual. Pihak aplikasi dapat membantu jika diperlukan.</p>
    </div>

    <div class="alert alert-warning mt-4" role="alert">
      ⚠️ Dengan melanjutkan penggunaan aplikasi, Anda dianggap telah membaca dan menyetujui Syarat & Ketentuan ini.
    </div>
  </div>
</div>

</body>
</html>
