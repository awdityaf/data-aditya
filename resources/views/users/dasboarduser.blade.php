@extends('tamplate.user')
@section('admin')

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

@if (auth()->user()->status== 'Mati')
<script>window.location.href = "{{ url('transaksi') }}";</script>
@else
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

                    </tr>
                    @php $a++ @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif




@endsection