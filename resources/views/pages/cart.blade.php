@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h3 class="fw-bold mb-3">🛒 Keranjang Belanja kamu</h3>

    @if(count($cart) > 0)
        <div class="list-group mb-4">
            @foreach($cart as $item)
            <div class="list-group-item d-flex align-items-center">
                <img src="{{ asset($item['gambar']) }}" alt="Produk" class="rounded"
                     style="height:60px; width:60px; object-fit:cover;">
                <div class="ms-3">
                    <h6 class="fw-bold mb-0">{{ $item['nama'] }}</h6>
                    <small class="text-muted">Rp {{ number_format($item['harga'],0,',','.') }}</small>
                </div>
            </div>
            @endforeach
        </div>

        <a href="{{ route('instruksi') }}" class="btn btn-dark w-100 fw-bold rounded-pill py-2">
            LANJUT PEMBAYARAN
        </a>
    @else
        <p class="text-muted">Keranjang masih kosong.</p>
        <a href="{{ url('produk') }}" class="btn btn-outline-dark rounded-pill">Belanja Sekarang</a>
    @endif
</div>
@endsection
