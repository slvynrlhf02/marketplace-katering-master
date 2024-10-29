@extends('merchant.partials.app')


@section('title')
    Merchant Menu
@endsection

@section('content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu/</span> Tambah Menu</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Menu</h5>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('merchant.store-menu') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if (session('warning'))
                            <div class="alert alert-warning">
                                <h1>{{ session('warning') }}</h1>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-primary">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="nama_menu">Nama Menu</label>
                          <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="nama_menu" value="{{ old('name') }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="price">Harga</label>
                          <div class="col-sm-10">
                        <input type="number" name="price" value="{{ old('price') }}" id="price" class="form-control">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="image">Gambar</label>
                          <div class="col-sm-10">
                        <input type="file" name="image"  id="image" class="form-control">
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                          <div class="col-sm-10">
                            <select name="kategori" id="kategori" class="form-control">
                              <option value="paket pagi">Paket Pagi</option>
                              <option value="paket siang">Paket Siang</option>
                              <option value="paket malam">Paket Malam</option>
                              <option value="paket single">Paket Single</option>
                            </select>
                          </div>
                      </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
@endsection
