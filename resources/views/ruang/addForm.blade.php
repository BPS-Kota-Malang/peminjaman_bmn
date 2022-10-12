@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah ruangan
    </div>
    <div class="card-body">
        <div class="form-group">
          <form action="{{route('ruang.store')}}" method="post">
            @csrf
          <label for="ruang">nama ruang</label>
          <input type="text" class="form-control" name="nama_ruang" id="ruang" aria-describedby="ruang">
          <label for="ruang">kapasitas</label>
          <input type="number" class="form-control" name="kapasitas" id="ruang" aria-describedby="ruang">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('ruang.index')}}" class="btn btn-primary">Kembali</a>
    </div>
    </div>
  </div>
</div>
@endsection