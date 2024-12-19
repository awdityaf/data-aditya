@extends('welcome') 
@section('user')

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review Gym</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.review-container {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 80%;
  max-width: 600px;
}

.review-card {
  border-radius: 8px;
  background-color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.review-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 15px;
}

.review-header h2 {
  font-size: 24px;
  color: #333;
}

.rating {
  font-size: 20px;
  color: #ff9800;
}

.review-body {
  margin-bottom: 20px;
}

.review-description {
  font-size: 16px;
  color: #555;
}

.review-footer {
  font-size: 14px;
  color: #777;
}

.review-footer p {
  margin-bottom: 8px;
}

</style>
<body>
<center>
<div class="review-container">
    <h1>Review Gym CYDA</h1>
    <div class="review-card">
      <div class="review-header">
        <h2>Gym CYDA</h2>
        <div class="rating">
          <span>⭐⭐⭐⭐⭐</span> <!-- Rating out of 5 -->
        </div>
      </div>
      <div class="review-body">
        <p class="review-description">
          Gym CYDA adalah tempat latihan yang sangat nyaman dan lengkap. Fasilitasnya sangat baik, dengan alat-alat fitness terbaru dan ruang yang luas. Para pelatihnya juga sangat berpengalaman dan ramah, siap membantu kita mencapai tujuan fitness.
        </p>
      </div>
      <div class="review-footer">
        <p><strong>Lokasi:</strong> Jl. trunojo rejoso junrejo no.86B , Kota Batu</p>
        <p><strong>Harga:</strong> Rp. 500.000/bulan</p>
      </div>
    </div>
  </div>
</center>
</body>
</html>
@endsection