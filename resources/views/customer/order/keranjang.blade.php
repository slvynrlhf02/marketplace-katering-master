@extends('customer.partials.main')
@section('contents')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Keranjang</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">Keranjang</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Keranjang Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Menu</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="customer/img/sate.jpg" class="img-fluid me-5 rounded-circle"
                                        style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Sate</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">Rp. 20.000,-</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
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
                            </td>
                            <td>
                                <p class="mb-0 mt-4">Rp. 20.000,-</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="customer/img/sup-mie.jpg" class="img-fluid me-5 rounded-circle"
                                        style="width: 80px; height: 80px;" alt="" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Sup Mie</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">Rp. 20.000,-</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
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
                            </td>
                            <td>
                                <p class="mb-0 mt-4">Rp. 20.000,-</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="customer/img/rendang.jpg" class="img-fluid me-5 rounded-circle"
                                        style="width: 80px; height: 80px;" alt="" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Rendang</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">Rp. 20.000,-</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
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
                            </td>
                            <td>
                                <p class="mb-0 mt-4">Rp. 20.000,-</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4">Checkout</h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Subtotal:</h5>
                                <p class="mb-0">Rp. 60.000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 me-4">Pengiriman</h5>
                                <div class="">
                                    <p class="mb-0">tarif: Rp. 3.000</p>
                                </div>
                            </div>
                            <p class="mb-0 text-end">Dikirim ke PT Trans</p>
                        </div>
                        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">Total</h5>
                            <p class="mb-0 pe-4">Rp. 63.000</p>
                        </div>
                        <a href="{{ route('checkout') }}"
                            class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4">Proses
                            Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Keranjang Page End -->
@endsection
