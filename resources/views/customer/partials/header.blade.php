Navbar Start
<div class="container-fluid fixed-top">
    <!-- Top Info Bar -->
    <!-- <div class="container topbar bg-dark text-light d-none d-lg-block py-2">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-warning"></i> <a href="#" class="text-light">Selamat Datang</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-warning"></i><a href="#" class="text-light">transindo@email.com</a></small>
            </div>
        </div>
    </div> -->
    <!-- Navbar -->
    <div class="container px-0">
        <nav class="navbar navbar-dark bg-secondary navbar-expand-xl py-3"> <!-- Ganti bg-primary menjadi bg-secondary -->
            <a href="{{ url('/') }}" class="d-flex align-items-center navbar-brand">
                <img src="customer/img/logo-td-circle.png" style="width: 80px; height: 80px;" alt="logo">
                <h1 class="text-white display-6 ms-2">{{ config('app.name') }}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link text-white {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                    <a href="{{ url('/menu') }}" class="nav-item nav-link text-white {{ $title === 'Menu' ? 'active' : '' }}">Menu</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <a href="{{ url('/keranjang') }}" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x text-white"></i>
                        <span class="position-absolute bg-warning rounded-circle text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                    </a>
                    <a href="{{ route('login') }}" class="my-auto">
                        <i class="fas fa-user fa-2x text-white"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-secondary text-white"> <!-- Ganti bg-primary menjadi bg-secondary -->
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3 bg-warning"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Custom CSS for Hover Effect -->
<style>
    .nav-item.nav-link:hover {
        color: #ffc107 !important; /* Warna kuning saat hover */
        transition: color 0.3s ease;
    }
</style>
