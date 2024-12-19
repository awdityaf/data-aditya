@extends('tamplate.admin')
@section('admin')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
        alert("Berhasil: {{ session('success') }}");
        </script>
    @endif
    
    @if(session('error'))
    <script>
        alert("Gagal: {{ session('error') }}");
        </script>
        @endif


<style>
    /* Modal Background */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    /* Modal Container */
    .modal-container {
        background-color: #fff;
        padding: 20px;
        width: 400px;
        max-width: 80%;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    /* Close Button */
    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 18px;
        cursor: pointer;
        color: #333;
    }

    /* Modal Content */
    .modal-content {
        margin-top: 10px;
    }

    /* Open Modal Button */
    .open-modal-btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<div class="col">
    <div class="tile">
        <div class="tile-body">
            <!-- Form Tambah/Edit -->
            <form method="post" id="kategoriForm" action="{{ route('tambahK') }}">
                @csrf
                <input type="hidden" name="id" id="formId"> <!-- Hidden input to store ID for editing -->
                <div class="form-group col-md-12">
                    <label class="control-label">Kategori</label>
                    <input class="form-control" name="kategori" id="formKategori" type="text" placeholder="Enter Category">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Harga</label>
                    <input class="form-control" name="harga" id="formHarga" type="text" placeholder="Enter Price">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Waktu</label>
                    <input class="form-control" name="durasi" id="formWaktu" type="text" placeholder="Enter Duration">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Deskripsi</label>
                    <input class="form-control" name="deskripsi" id="formDeskripsi" type="text" placeholder="Enter deskripsi">
                </div>
                <div class="form-group col-md-4 align-self-end">
                    <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col">
    <div class="tile">
        <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Waktu</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @php $a = 1 @endphp
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $a }}</td>
                        <td>{{ $d->kategori }}</td>
                        <td>{{ $d->harga }}</td>
                        <td>{{ $d->waktu }}</td>
                        <td>{{$d->deskripsi}}</td>
                        <td>
                            <form action="{{ url('deleteK', $d->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            <!-- Tombol Edit dengan data-atribut -->
                            <button class="btn btn-primary open-modal-btn"
                                data-id="{{ $d->id }}"
                                data-kategori="{{ $d->kategori }}"
                                data-harga="{{ $d->harga }}"
                                data-waktu="{{ $d->waktu }}"
                                data-deskripsi="{{ $d->deskripsi }}"
                                onclick="editKategori(this)">Edit</button>
                        </td>
                    </tr>
                    @php $a++ @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk membuka form dengan data yang dipilih
    function editKategori(button) {
        // Ambil data dari atribut tombol
        const id = button.getAttribute('data-id');
        const kategori = button.getAttribute('data-kategori');
        const harga = button.getAttribute('data-harga');
        const waktu = button.getAttribute('data-waktu');
        const deskripsi = button.getAttribute('data-deskripsi');


        // Set data ke dalam form
        document.getElementById('formId').value = id; // Set ID untuk mode edit
        document.getElementById('formKategori').value = kategori;
        document.getElementById('formHarga').value = harga;
        document.getElementById('formWaktu').value = waktu;
        document.getElementById('formDeskripsi').value = deskripsi;

        // Ubah URL form untuk mengarah ke route update
        document.getElementById('kategoriForm').action = `{{ route('editK', ':id') }}`.replace(':id', id);

        // Ubah teks tombol submit menjadi 'Update'
        document.getElementById('submitBtn').textContent = 'Update';
    }

    // Optional: Jika ingin reset form ke mode tambah saat halaman dimuat ulang
    document.getElementById('kategoriForm').addEventListener('reset', function() {
        // Reset action dan teks submit
        this.action = "{{ route('tambahK') }}"; // Kembali ke route tambah jika form di-reset
        document.getElementById('submitBtn').textContent = 'Submit';
    });
</script>


@endsection