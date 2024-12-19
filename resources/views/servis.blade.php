@extends('welcome')
@section('user')
<div class="services-section text-white" style="background-color: #000;">
    <div class="container py-5">
        <h1 class="text-center mb-4">Our Services</h1>
        <p class="text-center mb-5" style="font-size: 1.2rem;">
        Temukan paket keanggotaan eksklusif dan layanan premium kami yang dirancang untuk mendukung dan meningkatkan perjalanan kebugaran Anda.
        </p>

        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4 text-center mb-4">
                <div class="card bg-dark text-white border-light">
                    <img src="images/alat.jpeg" class="card-img-top" alt="Peralatan Gymt">
                    <div class="card-body">
                        <h5 class="card-title">Peralatan Terkini</h5>
                        <p class="card-text">
                        Nikmati akses ke peralatan gym terbaru, memastikan pengalaman latihan yang lengkap.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4 text-center mb-4">
                <div class="card bg-dark text-white border-light">
                    <img src="images/pelatih.jpeg" class="card-img-top" alt="Pelatihan Pribadi">
                    <div class="card-body">
                        <h5 class="card-title">Pelatihan Pribadi</h5>
                        <p class="card-text">Pelatih bersertifikat kami siap membimbing Anda melalui setiap langkah perjalanan kebugaran Anda.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4 text-center mb-4">
                <div class="card bg-dark text-white border-light">
                    <img src="images/kebugaran.jpeg" class="card-img-top" alt="Kelas Kelompok">
                    <div class="card-body">
                        <h5 class="card-title">Kelas Kebugaran Kelompok</h5>
                        <p class="card-text">Bergabunglah dengan kelas kelompok kami yang menyenangkan dan energik, mulai dari yoga hingga latihan interval intensitas tinggi.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
