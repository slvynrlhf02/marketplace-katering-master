<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Logo and Description -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="customer/img/logo-td-circle.png" style="width: 60px; height: 60px;" alt="logo">
                    <div class="ms-3">
                        <h2 class="text-warning">{{ config('app.name') }}</h2>
                        <p class="text-secondary mb-0">100% Dari Bahan Berkualitas</p>
                    </div>
                </div>
                <p>Marketplace katering dengan layanan terbaik dan bahan berkualitas untuk setiap pesanan Anda.</p>
            </div>
            <!-- Address -->
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-warning mb-4">Alamat</h4>
                <p><i class="fas fa-map-marker-alt me-3"></i>Kp. Ciirateun, RT02/RW002, Desa Mekarjaya, Kec. Arjasari, Kab. Bandung, 40379</p>
                <p><i class="fas fa-phone-alt me-3"></i>(022) 123-4567</p>
                <p><i class="fas fa-envelope me-3"></i>info@marketplacecatering.com</p>
            </div>
            <!-- Links -->
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-warning mb-4">Informasi</h4>
                <ul class="list-unstyled">
                    <li><a class="text-light" href="/about-us">Tentang Kami</a></li>
                    <li><a class="text-light" href="/contact-us">Hubungi Kami</a></li>
                    <li><a class="text-light" href="/faq">FAQ</a></li>
                    <li><a class="text-light" href="/terms">Syarat & Ketentuan</a></li>
                    <li><a class="text-light" href="/privacy">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>

        <!-- Payment and Social Media -->
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <h5 class="text-warning mb-3">Metode Pembayaran</h5>
                <img src="customer/img/payment.png" class="img-fluid" alt="Metode Pembayaran">
            </div>
            <div class="col-lg-6 col-md-12 text-lg-end">
                <h5 class="text-warning mb-3">Ikuti Kami</h5>
                <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid bg-dark text-light py-3">
    <div class="container d-flex justify-content-between">
        <span>&copy; 2024 <a href="{{ url('/') }}" class="text-warning">{{ config('app.name') }}</a>. All rights reserved.</span>
        <span>Designed by <a href="#" class="text-warning">YourCompany</a></span>
    </div>
</div>
<!-- Copyright End -->
