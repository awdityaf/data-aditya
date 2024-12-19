@extends('welcome')
@section('user')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carousel Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('/images/gym.jpeg');
            /* Path relatif ke folder public */
            background-repeat: no-repeat;
            background-size: cover;
        }

        .custom-button {
            background-color: #00C1D4;
            color: white;
            font-size: 18px;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .custom-button:hover {
            background-color: #0099a8;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 2rem;
        }

        .card {
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #6c757d;
            margin-bottom: 1rem;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 300px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img-top {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text ul {
            text-align: left;
            margin: 0;
            padding: 0;
            list-style: none;
            color: #555;
        }

        .card-text ul li {
            margin-bottom: 8px;
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .custom-button:hover {
            background-color: #0056b3;
        }

        .card-text {
            color: #ddd;
            font-size: 14px;
        }

        .card-text strong {
            color: #fff;
            font-size: 16px;
        }

        .card {
            background-color: #333;
            color: white;
        }

        .card-body ul {
            color: #ccc;
        }

        .card-title {
            font-size: 18px;
            color: #f0ad4e;
        }
    </style>
</head>

<body>
    <div class="container-fluid my-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/gambar1.jpeg')}}" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/gambar2.jpeg')}}" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/gambar3.jpeg')}}" class="d-block w-100" alt="Image 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="card-container">
            @foreach ($data as $kategori)
            @php
            // Logika Diskon
            if ($kategori->harga >= 500000) {
            $diskon = 20;
            } elseif ($kategori->harga >= 200000) {
            $diskon = 15;
            } else {
            $diskon = 10;
            }
            $hargaSetelahDiskon = $kategori->harga - ($kategori->harga * $diskon / 100);
            @endphp

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $kategori->kategori }}</h5>
                    <p class="card-text">
                        <strong>Harga Asli:</strong> Rp{{ number_format($kategori->harga, 0, ',', '.') }}<br>
                        <strong>Diskon:</strong> {{ $diskon }}%<br>
                        <strong>Harga Setelah Diskon:</strong> Rp{{ number_format($hargaSetelahDiskon, 0, ',', '.') }}/{{$kategori->waktu}}
                    </p>
                    <p class="card-text"><strong>{{$kategori-> deskripsi}}</strong></p>
                    <p>
                        @if ($kategori->kategori == 'Basic')
                    <ul>
                        <li>Akses ke gym selama jam operasional</li>
                        <li>Fasilitas shower dan loker</li>
                        <li>1 sesi konsultasi dengan pelatih</li>
                    </ul>
                    @elseif ($kategori->kategori == 'VIP')
                    <ul>
                        <li>Akses 24 jam ke gym</li>
                        <li>Fasilitas eksklusif (ruang sauna dan jacuzzi)</li>
                        <li>Personal trainer selama 1 bulan</li>
                        <li>Diskon tambahan untuk pembelian produk di gym</li>
                    </ul>
                    @endif
                    </p>
                    <center>
                        <a href="/register/{{ $kategori->id }}" class="custom-button">Daftar Sekarang</a>
                    </center>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
@endsection()