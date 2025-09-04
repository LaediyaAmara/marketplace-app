@extends('layouts.app')

@section('content')
<div class="container my-4">
    <a href="{{ url('Home') }}" class="text-decoration-none text-secondary mb-3 d-block">
        ← Kembali
    </a>

    <div class="text-center mb-4">
        <img src="{{ asset('images/cardigan.jpg') }}" alt="Cardigan Knitwear"
            class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
    </div>

    <div class="bg-white p-4 rounded shadow-sm" style="border-radius: 24px;">
        <h3 class="fw-bold mb-1" style="font-style: italic;">Cardigan Knitwear</h3>
        <p class="text-muted mb-3" style="font-style: italic;">Warna: Navy</p>

        <p class="text-secondary mb-3">
            Soft and breathable premium knit fabric.<br>
            Lightweight warmth for all-day comfort.<br>
            Ribbed cuffs and hem for a snug fit.<br>
            Classic button-up front with dual pockets.<br>
            Material: 70% Cotton, 30% Acrylic (Anti-shrink & Anti-pilling).<br>
            <strong>Size:</strong> XL
        </p>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <h4 class="fw-bold fst-italic text-dark mb-0">Rp 350.000</h4>

            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-chat-dots"></i>
                </button>
                <a href="{{ route('instruksi') }}" class="btn btn-dark shadow rounded-pill px-4 fw-bold">
                    BUY NOW
                </a>
                <!-- Form untuk ADD TO -->
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="nama" value="Cardigan Knitwear">
        <input type="hidden" name="harga" value="350000">
        <input type="hidden" name="gambar" value="images/cardigan.jpg">
        <button type="submit" class="btn btn-outline-primary rounded-pill">
            <i class="bi bi-cart"></i> ADD TO
        </button>
    </form>
</div>
            </div>
        </div>
    </div>
</div>
@endsection