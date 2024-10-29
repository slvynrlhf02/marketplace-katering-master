@extends('merchant.partials.app')

@section('title')
    Customer
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        @if ($merchants->isEmpty())
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Maaf, tidak ada merchant tersedia saat ini.</h4>
                </div>
            </div>
        @else
        @foreach ($merchants as $merchant)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">{{ $merchant->company_name }}</h2>
                        <p class="card-text">{{ $merchant->description }}</p>

                        <h3 class="mt-4">Menu:</h3>
                        @if ($merchant->menus->isEmpty())
                            <p class="text-muted">Tidak ada menu yang tersedia untuk merchant ini.</p>
                        @else
                        <ul class="list-group list-group-flush">
                            @foreach ($merchant->menus as $menu)
                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="100" class="img-thumbnail me-3">
                                        <div>
                                            <strong>{{ $menu->name }}</strong><br>
                                            <span class="text-muted">Rp{{ number_format($menu->price, 0, ',', '.') }}</span>
                                        </div>
                                    </div>
                                    <form action="{{ route('customer.order.create', $menu->id) }}" method="get">
                                        <button type="submit" class="btn btn-primary btn-sm">Pesan</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
