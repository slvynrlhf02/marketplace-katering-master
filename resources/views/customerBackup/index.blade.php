<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($merchants as $merchant)
        <h2>{{ $merchant->company_name }}</h2>
        <p>{{ $merchant->description }}</p>

        <h3>Menu:</h3>
        <ul>
            @foreach ($merchant->menus as $menu)
                <li>
                    <strong>{{ $menu->name }}</strong> - Rp{{ number_format($menu->price, 0, ',', '.') }}
                    <form action="{{ route('customer.order.create', $menu->id) }}" method="get">
                        <button type="submit">Pesan</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endforeach

</body>

</html>
