@extends('welcome') 
@section('user')
<style>
   
.hero-section {
    background-image: url('images/gym-hero.jpg'); 
    background-size: cover;
    background-position: center;
    color: #ffffff; /* Teks putih */
    padding: 100px 20px;
}

.hero-title {
    font-size: 3rem;
    font-weight: bold;
    color: #ffd700; /* Kuning untuk teks utama */
}

.hero-subtitle {
    font-size: 1.5rem;
    margin-top: 10px;
    color: #f0f0f0; /* Abu-abu terang untuk subtitle */
}

/* Content Section */
.content-section {
    margin: 50px 0;
    color: #ffffff; /* Teks putih */
}

.content-section h2 {
    color: #ffd700; /* Kuning untuk judul */
}

/* Membership Benefits */
.membership-benefits {
    background-color: #1a1a1a; /* Latar belakang abu-abu gelap */
    color: #ffffff; /* Teks putih */
    padding: 50px 20px;
}

.benefit-item i {
    color: #ffd700; /* Ikon kuning */
    margin-bottom: 10px;
}

.benefit-item h3 {
    color: #ffd700; /* Judul kuning */
}

.benefit-item p {
    color: #f0f0f0; /* Abu-abu terang untuk deskripsi */
}

/* CTA Section */
.cta-section {
    background-color: #007bff; /* Latar biru */
    color: #ffffff; /* Teks putih */
    padding: 50px 20px;
    margin-top: 50px;
}

.cta-section h2 {
    color: #ffd700; /* Judul kuning */
}

.cta-section .btn {
    background-color: #ffc107; /* Tombol kuning */
    color: black;
    font-weight: bold;
}

/* Umum */


</style>
<div class="about-us">
    <div class="hero-section text-center">
        <h1 class="hero-title">Tentang Kami</h1>
        <p class="hero-subtitle">Menciptakan Kesehatan dan Kebugaran Untuk Semua</p>
    </div>

    <div class="content-section container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/gambar1.jpeg') }}" class="img-fluid rounded" alt="Gym Interior">
            </div>
            <div class="col-md-6">
                <h2>Apa itu Membership Gym?</h2>
                <p>
                    Membership Gym kami dirancang untuk memberikan akses eksklusif kepada pelanggan kami ke fasilitas olahraga kelas dunia. Kami menyediakan berbagai alat olahraga modern, pelatih profesional, serta program kebugaran yang sesuai dengan kebutuhan individu Anda.
                </p>
                <p>
                    Dengan menjadi anggota, Anda tidak hanya mendapatkan akses ke fasilitas gym, tetapi juga komunitas yang mendukung gaya hidup sehat dan aktif.
                </p>
            </div>
        </div>
    </div>

    <div class="membership-benefits text-center">
        <h2>Keuntungan Menjadi Member</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 benefit-item">
                <i class="fa fa-dumbbell fa-3x"></i>
                <h3>Akses Tanpa Batas</h3>
                <p>Gunakan fasilitas gym kapan saja sesuai dengan jadwal Anda.</p>
            </div>
            <div class="col-md-3 benefit-item">
                <i class="fa fa-heartbeat fa-3x"></i>
                <h3>Kesehatan Optimal</h3>
                <p>Ikuti program kesehatan dan diet dari pelatih profesional kami.</p>
            </div>
            <div class="col-md-3 benefit-item">
                <i class="fa fa-users fa-3x"></i>
                <h3>Komunitas Positif</h3>
                <p>Gabung dengan komunitas yang mendukung gaya hidup aktif.</p>
            </div>
        </div>
    </div>

    <div class="cta-section text-center">
        <h2>Bergabunglah Sekarang!</h2>
        <p>
            Jangan lewatkan kesempatan untuk memulai perjalanan kebugaran Anda. Daftar hari ini dan nikmati berbagai manfaat dari keanggotaan gym kami.
        </p>
        <a href="/membership" class="btn btn-primary">Lihat Paket Membership</a>