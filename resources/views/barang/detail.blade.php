@extends('barang.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail BMN - BPS Kota Malang
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>id: </b>{{$Barang->id}}</li>
<li class="list-group-item"><b>kode_satker: </b>{{$Barang->kode_satker}}</li>
<li class="list-group-item"><b>nama_satker: </b>{{$Barang->nama_satker}}</li>
<li class="list-group-item"><b>kode_barang: </b>{{$Barang->kode_barang}}</li>
<li class="list-group-item"><b>nama_barang: </b>{{$Barang->nama_barang}}</li>
<li class="list-group-item"><b>nup: </b>{{$Barang->nup}}</li>
<li class="list-group-item"><b>kondisi: </b>{{$Barang->kondisi}}</li>
<li class="list-group-item"><b>merk_tipe: </b>{{$Barang->merk_tipe}}</li>
<li class="list-group-item"><b>tgl_rekam_pertama: </b>{{$Barang->tgl_rekam_pertama}}</li>
<li class="list-group-item"><b>tgl_perolehan: </b>{{$Barang->tgl_perolehan}}</li>
<li class="list-group-item"><b>nilai_perolehan_pertama: </b>{{$Barang->nilai_perolehan_pertama}}</li>
<li class="list-group-item"><b>nilai_mutasi: </b>{{$Barang->nilai_mutasi}}</li>
<li class="list-group-item"><b>nilai_perolehan: </b>{{$Barang->nilai_perolehan}}</li>
<li class="list-group-item"><b>nilai_penyusutan: </b>{{$Barang->nilai_penyusutan}}</li>
<li class="list-group-item"><b>nilai_buku: </b>{{$Barang->nilai_buku}}</li>
<li class="list-group-item"><b>kuantitas: </b>{{$Barang->kuantitas}}</li>
<li class="list-group-item"><b>jml_foto: </b>{{$Barang->jml_foto}}</li>
<li class="list-group-item"><b>status_pengguna: </b>{{$Barang->status_pengguna}}</li>
<li class="list-group-item"><b>status_pengelolaan: </b>{{$Barang->status_pengelolaan}}</li>
<li class="list-group-item"><b>no_psp: </b>{{$Barang->no_psp}}</li>
<li class="list-group-item"><b>tgl_psp: </b>{{$Barang->tgl_psp}}</li>
</ul>
</div>
<a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a>
</div>
</div>
</div>
@endsection
