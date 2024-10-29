@extends('customer.partials.main')

@section('contents')
<div class="bg-white">
    <!-- Header Section -->
    <header class="bg-gray-900 bg-opacity-75 shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <a href="#" class="text-white text-2xl font-semibold">Brand</a>
                <div class="flex items-center space-x-4">
                    <a href="{{route('register')}}" class="btn-primary">Sign up</a>
                    <a href="{{route('login')}}" class="btn-primary">Sign In</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero bg-gray-700 bg-opacity-60 text-white text-center py-20">
        <div class="container mx-auto px-6">
            <h4 class="mb-3 text-orange-500">Dari Bahan Terbaik</h4>
            <h1 class="mb-5 text-4xl md:text-5xl font-bold text-orange-500">Rasa yang Menggugah Selera, Dari Dapur Kami</h1>
        </div>
    </section>

    <!-- Menu Section -->
    <main class="my-8">
        <div class="container mx-auto px-6">
            <h3 class="text-gray-600 text-2xl font-medium">Menu Katering Spesial</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
                @foreach($all_menu as $item)
                    <div class="menu-item">
                        <div class="image" style="background-image: url('customer/img/{{ $item->image }}')"></div>
                        <div class="details px-5 py-3 text-center"> <!-- Tambahkan text-center untuk memusatkan teks -->
                            <h3 class="text-gray-800 uppercase">{{ $item->name }}</h3>
                            <p class="text-gray-500 mt-2">{{ $item->description }}</p>
                            <span class="text-orange fs-5 fw-bold">Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</div>

@endsection

<style>
    .btn-primary {
        padding: 0.5rem 1rem;
        background-color: #1D4ED8;
        color: white;
        border-radius: 9999px;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #2563EB;
    }
    .nav-link {
        color: #F3F4F6;
        padding: 0.5rem 1rem;
        transition: color 0.3s ease;
    }
    .nav-link:hover, .nav-link:focus {
        color: #93C5FD;
    }
    .hero {
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://img.freepik.com/free-photo/top-view-table-full-delicious-food-composition_23-2149141348.jpg');
        background-size: cover;
    }
    .menu-item {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        max-width: 250px; /* Atur lebar maksimum kotak menu */
        margin: 0 auto; /* Pusatkan kotak di dalam grid */
    }
    .menu-item:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }
    .menu-item .image {
        height: 12rem; /* Mengatur tinggi gambar */
        width: 100%; /* Mengatur lebar gambar */
        background-size: cover; /* Menyesuaikan gambar */
        background-position: center; /* Pusatkan gambar */
    }
    .details {
        text-align: center; /* Pusatkan teks */
    }
    .text-orange {
        color: orange;
    }
</style>
