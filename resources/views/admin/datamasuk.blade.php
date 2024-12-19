@extends('tamplate.admin')
@section('admin')


<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telpon</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $a = 1@endphp
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$a}}</td>
                            <td>{{$d->username}}</td>
                            <td> {{$d->email}}</td>
                            <td>{{$d->no_handphone}}</td>
                            <td>
                                <form action="{{ url('confrimP', $d->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Confrim pembayaran</button>
                                </form>
                            </td>
                        </tr>
                        @php
                        $a++
                        @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection