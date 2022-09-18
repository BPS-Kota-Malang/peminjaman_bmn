@extends('barang.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h3 style="text-align: center">Data Barang - Badan Pusat Statistik 
(BPS) Kota Malang</h3>
</div>
<div class="float-right my-2">
<a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
</div>
<form action="{{ route('barang.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" class="form-control">
    <br>
    <button class="btn btn-success">Import Barang Data</button>
</form>
<a class="btn btn-warning float-end" href="{{ route('barang.export') }}">Export barang Data</a>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<br>
<table class="table table-bordered">
<tr style="text-align: center" class="thead-light">
<th>id</th>
<th>kode_satker</th>
<th>nama_satker</th>
<th>kode_barang</th>
<th>nama_barang</th>
<th>nup</th>
<th>kondisi</th>
<th>merk_tipe</th>
<th>tgl_rekam_pertama</th>
<th>tgl_perolehan</th>
<th>nilai_perolehan_pertama</th>
<th>nilai_mutasi</th>
<th>nilai_perolehan</th>
<th>nilai_penyusutan</th>
<th>nilai_buku</th>
<th>kuantitas</th>
<th>jml_foto</th>
<th>status_pengguna</th>
<th>status_pengelolaan</th>
<th>no_psp</th>
<th>tgl_psp</th>
<th width="280px">Action</th>
</tr>
@foreach ($barang as $brg)
<tr style="text-align: center">
<td>{{ $loop->iteration }}</td>
<td>{{ $brg ->id }}</td>
<td>{{ $brg ->kode_satker }}</td>
<td>{{ $brg ->nama_satker }}</td>
<td>{{ $brg ->kode_barang }}</td>
<td>{{ $brg ->nama_barang }}</td>
<td>{{ $brg ->nup }}</td>
<td>{{ $brg ->kondisi }}</td>
<td>{{ $brg ->merk_tipe }}</td>
<td>{{ $brg ->tgl_rekam_pertama }}</td>
<td>{{ $brg ->tgl_perolehan }}</td>
<td>{{ $brg ->nilai_perolehan_pertama }}</td>
<td>{{ $brg ->nilai_mutasi }}</td>
<td>{{ $brg ->nilai_perolehan }}</td>
<td>{{ $brg ->nilai_penyusutan }}</td>
<td>{{ $brg ->nilai_buku }}</td>
<td>{{ $brg ->kuantitas }}</td>
<td>{{ $brg ->jml_foto }}</td>
<td>{{ $brg ->status_pengguna }}</td>
<td>{{ $brg ->status_pengelolaan }}</td>
<td>{{ $brg ->no_psp }}</td>
<td>{{ $brg ->tgl_psp }}</td>

<td>
<form action="{{ route('barang.destroy',['barang'=>$brg->id]) }}" method="POST">
<a class="btn btn-info" href="{{ route('barang.show',$brg->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('barang.edit',$brg->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
