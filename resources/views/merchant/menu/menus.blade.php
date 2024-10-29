@extends('merchant.partials.app')
@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Tables </h4>


                <a class="btn btn-primary" href="{{ route('merchant.create-menu') }}">Tambah Menu</a>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table </h5>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
   @if (Auth::user()->merchantProfile)
        @if ($menus->isEmpty())
            <p>Tidak ada menu yang tersedia.</p>
        @else
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                         <th>No</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                  @forelse($menus as $menu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>
                        @if ($menu->image)
                            <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('merchant.edit-menu', $menu->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('merchant.destroy-menu', $menu->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Yakin ingin menghapus menu ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Tidak ada menu yang tersedia.</td>
                </tr>
            @endforelse
                    </tbody>
                  </table>
                </div>
           @endif
    @else
        <p>Profil merchant belum tersedia.</p>
    @endif
              </div>
              <!--/ Basic Bootstrap Table -->
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->
@endsection
