@extends('barang.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Edit Barang
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Ada sesuatu yang salah dengan inputan 
anda<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('barang.update', $Barang->id) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
    <label for="id">ID</label>
    <input type="number" name="id" class="form-control" id="id" value="{{ $Barang->id }}" aria-describedby="id" placeholder="Silahkan masukkan nomor pegawai">
    </div>
    <div class="form-group">
    <label for="kode_satker">kode_satker</label>
    <input type="text" name="kode_satker" class="form-control"
    id="kode_satker" value="{{ $Barang->kode_satker }}" aria-describedby="kode_satker" placeholder="Silahkan masukkan nama anda">
    </div>
    <div class="form-group">
        <label for="nama_satker">nama_satker</label>
        <input type="text" name="nama_satker" class="form-control"
        id="nama_satker" value="{{ $Barang->nama_satker }}" aria-describedby="nama_satker" placeholder="Silahkan masukkan nama anda">
        </div>
        <div class="form-group">
            <label for="kode_barang">kode_barang</label>
            <input type="text" name="kode_barang" class="form-control"
            id="kode_barang" value="{{ $Barang->kode_barang }}" aria-describedby="kode_barang" placeholder="Silahkan masukkan nama anda">
            </div>
    <div class="form-group">
    <label for="nama_barang">nama_barang</label>
    <input type="text" name="nama_barang" class="form-control"
    id="nama_barang" value="{{ $Barang->nama_barang }}" aria-describedby="nama_barang" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="nup">nup</label>
    <input type="text" name="nup" class="form-control"
    id="nup" value="{{ $Barang->nup }}" aria-describedby="nup" placeholder="Silahkan masukkan jabatan 
    anda">
    </div>
    <div class="form-group">
    <label for="kondisi">kondisi</label>
    <input type="text" name="kondisi" class="form-control"
    id="kondisi" value="{{ $Barang->kondisi }}" aria-describedby="kondisi" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="merk_tipe">merk_tipe</label>
    <input type="text" name="merk_tipe" class="form-control"
    id="merk_tipe" value="{{ $Barang->merk_tipe }}" aria-describedby="merk_tipe" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="tgl_rekam_pertama">tgl_rekam_pertama</label>
    <input type="text" name="tgl_rekam_pertama" class="form-control"
    id="tgl_rekam_pertama" value="{{ $Barang->tgl_rekam_pertama }}" aria-describedby="tgl_rekam_pertama" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="tgl_perolehan">tgl_perolehan</label>
    <input type="text" name="tgl_perolehan" class="form-control"
    id="tgl_perolehan" value="{{ $Barang->tgl_perolehan }}" aria-describedby="tgl_perolehan" placeholder="Silahkan masukkan divisi anda">
     </div>
    <div class="form-group">
    <label for="nilai_perolehan_pertama">nilai_perolehan_pertama</label>
    <input type="text" name="nilai_perolehan_pertama" class="form-control"
    id="nilai_perolehan_pertama" value="{{ $Barang->nilai_perolehan_pertama }}" aria-describedby="nilai_perolehan_pertama" placeholder="Silahkan masukkan divisi anda">
    </div>
     <div class="form-group">
    <label for="nilai_mutasi">nilai_mutasi</label>
    <input type="text" name="nilai_mutasi" class="form-control"
    id="nilai_mutasi" value="{{ $Barang->nilai_mutasi }}" aria-describedby="nilai_mutasi" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="nilai_perolehan">nilai_perolehan</label>
    <input type="text" name="nilai_perolehan" class="form-control"
    id="nilai_perolehan" value="{{ $Barang->nilai_perolehan }}" aria-describedby="nilai_perolehan" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="nilai_penyusutan">nilai_penyusutan</label>
    <input type="text" name="nilai_penyusutan" class="form-control"
    id="nilai_penyusutan" value="{{ $Barang->nilai_penyusutan }}" aria-describedby="nilai_penyusutan" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="nilai_buku">nilai_buku</label>
    <input type="text" name="nilai_buku" class="form-control"
    id="nilai_buku" value="{{ $Barang->nilai_buku }}" aria-describedby="nilai_buku" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="kuantitas">kuantitas</label>
    <input type="text" name="kuantitas" class="form-control"
    id="kuantitas" value="{{ $Barang->kuantitas }}" aria-describedby="kuantitas" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="jml_foto">jml_foto</label>
    <input type="text" name="jml_foto" class="form-control"
    id="jml_foto" value="{{ $Barang->jml_foto }}" aria-describedby="jml_foto" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="status_pengguna">status_pengguna</label>
    <input type="text" name="status_pengguna" class="form-control"
    id="status_pengguna" value="{{ $Barang->status_pengguna }}" aria-describedby="status_pengguna" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="status_pengelolaan">status_pengelolaan</label>
    <input type="text" name="status_pengelolaan" class="form-control"
    id="status_pengelolaan" value="{{ $Barang->status_pengelolaan }}" aria-describedby="status_pengelolaan" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="no_psp">no_psp</label>
    <input type="text" name="no_psp" class="form-control"
    id="no_psp" value="{{ $Barang->no_psp }}" aria-describedby="no_psp" placeholder="Silahkan masukkan divisi anda">
    </div>
    <div class="form-group">
    <label for="tgl_psp">tgl_psp</label>
    <input type="text" name="tgl_psp" class="form-control"
    id="tgl_psp" value="{{ $Barang->tgl_psp }}" aria-describedby="tgl_psp" placeholder="Silahkan masukkan divisi anda">
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection
