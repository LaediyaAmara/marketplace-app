@extends('layouts.app')

@section('content')
<div class="container my-4 bayar-wrapper">
    <h4 class="text-center fw-bold">PAYMENT INSTRUCTION</h4>

    <div class="ticket rounded-4 shadow-sm mx-auto p-4 bg-white">

        {{-- Informasi Order --}}
        <div class="mb-3">
            <p class="fw-semibold mb-1">Order ID</p>
            <h6 class="fw-bold text-primary">INV-20250820-001</h6>
            <p class="small mb-0 text-muted">Tanggal: 20 Agustus 2025</p>
        </div>

        <hr>

        {{-- Total Pembayaran --}}
        <div class="mb-3 text-center">
            <p class="fw-semibold mb-1">Total Amount</p>
            <h3 class="fw-bold text-success">Rp288.000</h3>
            <p class="small text-muted mb-0">Harap bayar sesuai nominal agar otomatis terverifikasi</p>
        </div>

        <hr>

        {{-- Instruksi Transfer --}}
        <p class="fw-semibold mb-2">Transfer To</p>
        <div class="border rounded-3 p-3 mb-3 bg-light">
            <div class="d-flex align-items-center gap-2 mb-2">
                <img src="{{ asset('images/bca.png') }}" alt="BCA" height="25">
                <span class="fw-bold">BCA Virtual Account</span>
            </div>
            <p class="mb-1">Nomor VA:</p>
            <h5 class="fw-bold text-primary">1234 5678 9012 3456</h5>
            <button class="btn btn-outline-primary btn-sm rounded-pill mt-2" onclick="navigator.clipboard.writeText('1234567890123456')">
                Copy
            </button>
        </div>

        <div class="border rounded-3 p-3 mb-4 bg-light">
            <div class="d-flex align-items-center gap-2 mb-2">
                <img src="{{ asset('images/bri.png') }}" alt="BRI" height="25">
                <span class="fw-bold">BRI Virtual Account</span>
            </div>
            <p class="mb-1">Nomor VA:</p>
            <h5 class="fw-bold text-primary">9876 5432 1098 7654</h5>
            <button class="btn btn-outline-primary btn-sm rounded-pill mt-2" onclick="navigator.clipboard.writeText('9876543210987654')">
                Copy
            </button>
        </div>

        <hr>

        {{-- Instruksi --}}
        <div class="mb-3">
            <p class="fw-semibold">How to Pay</p>
            <ol class="small text-muted ps-3">
                <li>Pilih salah satu bank transfer (BCA / BRI).</li>
                <li>Salin nomor Virtual Account di atas.</li>
                <li>Buka aplikasi m-banking / ATM.</li>
                <li>Lakukan transfer sesuai nominal <strong>Rp288.000</strong>.</li>
                <li>Setelah transfer berhasil, klik tombol "Saya Sudah Bayar".</li>
            </ol>
        </div>

        {{-- Tombol Konfirmasi --}}
        <a href="{{ route('struk') }}" class="btn btn-dark w-100 fw-bold rounded-pill">SAYA SUDAH BAYAR</a>
    </div>
</div>
@endsection
