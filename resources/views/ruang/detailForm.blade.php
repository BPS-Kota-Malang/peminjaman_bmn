@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i> Detail Ruangan</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama Ruangan :</td>
                        <td>{{ $ruang->nama_ruang }}</td>
                    </tr>
                    <tr>
                        <td>kapasitas :</td>
                        <td>{{ $ruang->kapasitas }} Orang</td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="{{ route('ruang.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection