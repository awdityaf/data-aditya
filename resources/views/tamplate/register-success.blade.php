<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Sukses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Kontainer utama */
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .message {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn-home, .btn-login {
            display: inline-block;
            background-color: #00b3b3;
            color: white;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            margin: 5px;
            transition: background-color 0.3s;
        }

        .btn-home:hover, .btn-login:hover {
            background-color: #008c8c;
        }

        .subtext {
            font-size: 14px;
            color: #777;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Registrasi Sukses!</h1>
    <div class="message">
        Terima kasih telah mendaftar! Anda sekarang menjadi anggota kami.
    </div>
    <a href="{{ url('/') }}" class="btn-home">Kembali ke Halaman Utama</a>
    <a href="/login" class="btn-login">Login Sekarang</a>
    <div class="subtext">
        Jika Anda memiliki pertanyaan, silakan hubungi kami di support@example.com.
    </div>
</div>

</body>
</html>
