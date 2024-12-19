@extends('tamplate.admin')
@section('admin')


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
              <form method="POST" action="confrim">
                @csrf
                <input type="hidden" name="id" value="{{$d->id}}">
                <input type="hidden" name="status" value="Aktif">
                <br>
                <input type="submit" name="bayar" value="Confirm" class="btn btn-primary w-50">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection