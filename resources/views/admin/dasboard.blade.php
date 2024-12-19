@extends('tamplate.admin')
@section('admin')

<div class="col-md-6 col-lg-6">
    <a href="adkategori">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
                <h4>List kategori</h4>
            </div>
        </div>
    </a>
    <a href="adkategori">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
                <h4>List Data</h4>
            </div>
        </div>
    </a>
</div>
<!-- <div style="padding: 20px;" class="container">
    <h3>Data Konseling</h3>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover dtabel ">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Durasi</th>
                        <th>id_pembayaran</th>
                        <th>id_kategori</th>
                        <th>Tanggal_mulai</th>
                        <th>Tanggal_selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a = 1 ?>
                    @foreach ($data as $Users )

                    <td>{{$a}}</td>
                    <td>{{$Users->username}}</td>
                    <td>{{$Users->nik}}</td>
                    <td>{{$Users->durasi}}</td>
                    



                    <?php $a++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dtabel').DataTable();
    });
</script> -->



@endsection