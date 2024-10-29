@extends('merchant.partials.app')
@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu/</span>Edit Menu</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Menu</h5>
                    </div>
                    <div class="card-body">

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
                      <form action="{{ route('merchant.update-menu', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="nama_menu">Nama Menu</label>
                          <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="nama_menu" value="{{ old('name', $menu->name) }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="price">Harga</label>
                          <div class="col-sm-10">
                        <input type="number" name="price" value="{{ old('price',$menu->price) }}" id="price" class="form-control">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="form-control" id="description">{{ old('description', $menu->description) }}</textarea>
                            </div>
                        </div>
                           <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="gambar">Gambar</label>
                            <div class="col-sm-10">
                            @if ($menu->image)
                          <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" style="width: 200px; height: 300px;">
                          @endif
                          <input type="file" name="image" class="form-control">
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
            <!-- / Content -->
@endsection
