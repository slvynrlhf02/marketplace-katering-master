<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Pesan {{ $menu->name }}</h2>
    <p>Harga per porsi: Rp{{ number_format($menu->price, 0, ',', '.') }}</p>

    <form action="{{ route('customer.order.store', $menu->id) }}" method="post">
        @csrf
        <div>
            <label for="quantity">Jumlah Porsi:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
        </div>

        <div>
            <label for="delivery_date">Tanggal Pengiriman:</label>
            <input type="date" name="delivery_date" id="delivery_date" required>
        </div>

        <button type="submit">Buat Pesanan</button>
    </form>

</body>

</html>
