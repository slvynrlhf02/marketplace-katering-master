
@extends('merchant.partials.app')

@section('title')
    Customer
@endsection


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h1 class="mb-4">Daftar Pesanan</h1>

        <!-- Tampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Jika tidak ada pesanan -->
        @if ($orders->isEmpty())
            <div class="alert alert-info" role="alert">
                Tidak ada pesanan yang dibuat.
            </div>
        @else
            <table class="table table-striped table-bordered">
                <thead class="">
                    <tr>
                        <th>Nama Menu</th>
                        <th>Jumlah Porsi</th>
                        <th>Tanggal Pengiriman</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->menu->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->delivery_date }}</td>
                            <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection


