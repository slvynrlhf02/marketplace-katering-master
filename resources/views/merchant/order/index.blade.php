@extends('merchant.partials.app')

@section('title')
    Orders
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h1 class="mb-4">Daftar Pesanan</h1>

        @if (Auth::user()->merchantProfile)
            @if ($orders->isEmpty())
                <div class="alert alert-info" role="alert">
                    Tidak ada pesanan yang masuk.
                </div>
            @else
                <table class="table table-striped table-bordered">
                    <thead class="">
                        <tr>
                            <th>Nama Menu</th>
                            <th>Jumlah Porsi</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Total Harga</th>
                            <th>Nama Customer</th>
                            <th>Cetak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->menu->name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->delivery_date }}</td>
                                <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>
                                    <form action="{{ route('customer.order.invoice.pdf', $order->id) }}" method="GET" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary btn-sm">Cetak</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @else
            <div class="alert alert-warning" role="alert">
                Profil merchant belum tersedia.
            </div>
        @endif
    </div>
    <!-- / Content -->
@endsection
