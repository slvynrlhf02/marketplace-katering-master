{{-- @extends('customer.partials.main')
@section('contents')
@endsection --}}

@extends('customer.partials.main')

@section('contents')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Detil Menu</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/menu') }}">Menu</a></li>
            <li class="breadcrumb-item active text-white">Detil Menu</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                <a href="#">
                                    <img src="{{ asset('storage/'.$menu->image) }}" class="img-fluid rounded"
                                        alt="Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-3">{{ $menu->name }}</h4>
                            <p class="mb-3 text-capitalize">Kategori: {{ $menu->kategori }}</p>
                            <h5 class="fw-bold mb-3">Rp. {{ number_format($menu->price, 0, ',', '.') }}</h5>
                            <p class="mb-4">{{ $menu->description }}</p>
                            <div class="input-group quantity mb-5" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center border-0"
                                    value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('keranjang') }}"
                                class="btn border border-secondary rounded-pill px-4 mb-4 text-primary">
                                <i class="fa fa-plus me-2 text-primary"></i> Keranjang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4 fruite">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <h4>Kategori Lainnya</h4>
                                <ul class="list-unstyled fruite-categorie">
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#"><i class="fas fa-bowl-food-alt me-2"></i>Paket Pagi</a>
                                            <span>(3)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#"><i class="fas fa-bowl-food-alt me-2"></i>Paket Siang</a>
                                            <span>(5)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#"><i class="fas fa-bowl-food-alt me-2"></i>Paket Malam</a>
                                            <span>(2)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#"><i class="fas fa-bowl-food-alt me-2"></i>Paket Single</a>
                                            <span>(8)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="fw-bold mb-0">Menu Lainnya</h1>
            <div class="vesitable">
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    @foreach ($all_menu as $item)
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid w-100 rounded-top"
                                    style="width: 300px; height: 200px;" alt="menu-img">
                            </div>
                            <div class="text-white text-capitalize bg-primary px-3 py-1 rounded position-absolute"
                                style="top: 10px; right: 10px;">{{ $item->kategori }}</div>
                            <div class="p-4 pb-0 rounded-bottom">
                                <h4>{{ $item->name }}</h4>
                                {{-- <p>{{ $item->name }}</p> --}}
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold">Rp. {{ number_format($item->price, 0, ',', '.') }}
                                    </p>
                                    <a href="{{ route('menu-detail', $item->id) }}"
                                        class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"><i
                                            class="fa fa-plus me-2 text-primary"></i> Keranjang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('menu-customer') }}" class="btn border-secondary px-4 rounded-pill text-primary">Cek
                        selengkapnya >></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->
@endsection
