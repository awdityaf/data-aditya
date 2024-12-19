@extends('welcome')
@section('user')
<script>
  alert('bayyarr duluu!!')
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document Data | Servis</title>
</head>

<body>
  <br>
  <div class="row">
    <div class="card col-md-12 col-12 text-center">
      <table class="table table-hover">
        <thead>
          <th>Nama</th>
          <th>No.Handphone</th>
          <th>Email</th>
          <th>Paket</th>
          <th>Diskon</th>
          <th>Total Biaya</th>
          <th>Pembayaran</th>
          <th>Aksi</th>
        </thead>
        <tbody>
          @foreach ($data as $d)
          <tr>
            <td>{{ $d->username }}</td>
            <td>{{ $d->no_handphone }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ optional($d->kategori)->kategori ?? 'Tidak ada' }}</td>
            <td><span class="badge bg-danger">10%</span></td>
            <td>{{ optional($d->kategori)->harga ?? 'Tidak ada' }}</td>
            <td>
              <font style="font-size: 12px;">Rek. Bank Central Asia (BCA)</font><br>
              <font style="font-size: 12px;font-weight:bold;">0123456789</font><br>
              <font style="font-size: medium; font-weight: bold;">a.n. Mr.Admin</font>
            </td>
            <td>
              @if (auth()->user()->status == 'Aktif')
              <span class="badge bg-success">Lunas</span>
              @else

              <form method="POST" action="confrim.pembayaran" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="nomor_rekening" value="0123456789">
                <input type="hidden" name="nomor_hp_penerima" value="{{ $d->no_handphone }}">
                <input type="hidden" name="nama_bank" value="Bank Central Asia (BCA)">
                <input type="hidden" name="nama_penerima" value="a.n. Mr.Admin">
                <input type="hidden" name="jumlah_pembayaran" value="Rp. 200.000">
                <input type="file" name="invoice" class="form-control" >
                <br>
                <input type="submit" name="bayar" value="Confirm" class="btn btn-primary w-50">
              </form>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>

@endsection
 