@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Ruangan
        </div>
        <div class="card-body">
            <form action="{{url('ruang/'.$ruang->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="ruang"></label>
                    <input type="text" class="form-control" name="nama_ruang" id="ruang" aria-describedby="ruang" value="{{$ruang->nama_ruang}}">
                  </div>
                  <div class="form-group">
                    <label for="ruang">kapasitas</label>
                    <input type="number" class="form-control" name="kapasitas" id="ruang" aria-describedby="ruang" value="{{$ruang->kapasitas}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('ruang.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection