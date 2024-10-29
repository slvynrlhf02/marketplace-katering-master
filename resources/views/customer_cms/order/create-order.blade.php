@extends('merchant.partials.app')

@section('title')
    Customer
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h2 class="mb-4">Pesan {{ $menu->name }}</h2>
        <p class="lead">Harga per porsi: <strong>Rp{{ number_format($menu->price, 0, ',', '.') }}</strong></p>

        <form action="{{ route('customer.order.store', $menu->id) }}" method="post" class="border p-4 rounded bg-light shadow-sm">
            @csrf
            <div class="mb-3">
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="200" class="img-thumbnail me-3">

            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah Porsi:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
            </div>

            <div class="mb-3">
                <label for="delivery_date" class="form-label">Tanggal Pengiriman:</label>
                <input type="date" name="delivery_date" id="delivery_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Buat Pesanan</button>
        </form>
</div>
@endsection
