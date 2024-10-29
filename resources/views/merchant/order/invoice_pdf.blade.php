<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $order->invoice_number }}</title>
    <style>
        body {
            font-family: 'Courier', sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Invoice - {{ $order->invoice_number }}</h1>
    <p>Tanggal: {{ now()->format('d-m-Y') }}</p>
    <table>
        <tr>
            <th>Nama Menu</th>
            <td>{{ $order->menu->name }}</td>
        </tr>
        <tr>
            <th>Jumlah Porsi</th>
            <td>{{ $order->quantity }}</td>
        </tr>
        <tr>
            <th>Tanggal Pengiriman</th>
            <td>{{ $order->delivery_date }}</td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td class="total">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
        </tr>
    </table>
</body>

</html>
