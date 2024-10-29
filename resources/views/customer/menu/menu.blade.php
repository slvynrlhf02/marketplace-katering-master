@extends('customer.partials.main')

@section('contents')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Menu</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white">Menu</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Menu Start-->
    <div class="container py-5">
        <h1 class="mb-4">Menu Katering</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-6">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="Cari sesuatu.."
                                aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="fruits">Filter data:</label>
                            <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                form="fruitform">
                                <option value="volvo">Semua Produk</option>
                                <option value="saab">Paket Pagi</option>
                                <option value="opel">Paket Siang</option>
                                <option value="audi">Paket Malam</option>
                                <option value="audi">Paket Single</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4 justify-content-center">
                            @foreach ($all_menu as $item)
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid w-100 rounded-top"
                                                style="width: 300px; height: 200px;" alt="menu-img">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute text-capitalize"
                                            style="top: 10px; left: 10px;">{{ $item->kategori }}</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4 class="text-capitalize">{{ $item->name }}</h4>
                                            <p>{{ $item->description }}</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">Rp.
                                                    {{ number_format($item->price, 0, ',', '.') }}</p>
                                                <a href="{{ route('menu-detail', base64_encode($item->id)) }}"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-plus me-2 text-primary"></i> Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <a href="#" class="rounded">&laquo;</a>
                                    <a href="#" class="active rounded">1</a>
                                    <a href="#" class="rounded">2</a>
                                    <a href="#" class="rounded">3</a>
                                    <a href="#" class="rounded">4</a>
                                    <a href="#" class="rounded">5</a>
                                    <a href="#" class="rounded">6</a>
                                    <a href="#" class="rounded">&raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Menu End-->
@endsection
