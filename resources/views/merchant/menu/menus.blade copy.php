<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
</head>

<body>
    <h1>Daftar Menu</h1>

    <a href="{{ route('merchant.create-menu') }}">Tambah Menu</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
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
        <tbody>
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
                        <a href="{{ route('merchant.edit-menu', $menu->id) }}">Edit</a> |
                        <form action="{{ route('merchant.destroy-menu', $menu->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
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
</body>

</html>
