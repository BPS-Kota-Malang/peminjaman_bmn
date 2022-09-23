
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Tambah barang 
</div>
<div class="card-body">
<?php if($errors->any()): ?>
<div class="alert alert-danger">
<strong>Whoops!</strong>Ada sesuatu yang salah dengan inputan 
anda.<br><br>
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
<form method="post" action="<?php echo e(route('barang.store')); ?>"
id="myForm">
<?php echo csrf_field(); ?>
<div class="form-group">
<label for="id">ID</label>
<input type="number" name="id" class="form-control" id="id" aria-describedby="id" placeholder="Silahkan masukkan nomor pegawai">
</div>
<div class="form-group">
<label for="kode_satker">kode_satker</label>
<input type="text" name="kode_satker" class="form-control"
id="kode_satker" aria-describedby="kode_satker" placeholder="Silahkan masukkan nama anda">
</div>
<div class="form-group">
    <label for="nama_satker">nama_satker</label>
    <input type="text" name="nama_satker" class="form-control"
    id="kode_satker" aria-describedby="nama_satker" placeholder="Silahkan masukkan nama anda">
    </div>
    <div class="form-group">
        <label for="kode_barang">kode_barang</label>
        <input type="text" name="kode_barang" class="form-control"
        id="kode_barang" aria-describedby="kode_barang" placeholder="Silahkan masukkan nama anda">
        </div>
<div class="form-group">
<label for="nama_barang">nama_barang</label>
<input type="text" name="nama_barang" class="form-control"
id="nama_barang" aria-describedby="nama_barang" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="nup">nup</label>
<input type="text" name="nup" class="form-control"
id="nup" aria-describedby="nup" placeholder="Silahkan masukkan jabatan 
anda">
</div>
<div class="form-group">
<label for="kondisi">kondisi</label>
<input type="text" name="kondisi" class="form-control"
id="kondisi" aria-describedby="kondisi" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="merk_tipe">merk_tipe</label>
<input type="text" name="merk_tipe" class="form-control"
id="merk_tipe" aria-describedby="merk_tipe" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="tgl_rekam_pertama">tgl_rekam_pertama</label>
<input type="text" name="tgl_rekam_pertama" class="form-control"
id="tgl_rekam_pertama" aria-describedby="tgl_rekam_pertama" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="tgl_perolehan">tgl_perolehan</label>
<input type="text" name="tgl_perolehan" class="form-control"
id="tgl_perolehan" aria-describedby="tgl_perolehan" placeholder="Silahkan masukkan divisi anda">
 </div>
<div class="form-group">
<label for="nilai_perolehan_pertama">nilai_perolehan_pertama</label>
<input type="text" name="nilai_perolehan_pertama" class="form-control"
id="nilai_perolehan_pertama" aria-describedby="nilai_perolehan_pertama" placeholder="Silahkan masukkan divisi anda">
</div>
 <div class="form-group">
<label for="nilai_mutasi">nilai_mutasi</label>
<input type="text" name="nilai_mutasi" class="form-control"
id="nilai_mutasi" aria-describedby="nilai_mutasi" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="nilai_perolehan">nilai_perolehan</label>
<input type="text" name="nilai_perolehan" class="form-control"
id="nilai_perolehan" aria-describedby="nilai_perolehan" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="nilai_penyusutan">nilai_penyusutan</label>
<input type="text" name="nilai_penyusutan" class="form-control"
id="nilai_penyusutan" aria-describedby="nilai_penyusutan" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="nilai_buku">nilai_buku</label>
<input type="text" name="nilai_buku" class="form-control"
id="nilai_buku" aria-describedby="nilai_buku" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="kuantitas">kuantitas</label>
<input type="text" name="kuantitas" class="form-control"
id="kuantitas" aria-describedby="kuantitas" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="jml_foto">jml_foto</label>
<input type="text" name="jml_foto" class="form-control"
id="jml_foto" aria-describedby="jml_foto" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="status_pengguna">status_pengguna</label>
<input type="text" name="status_pengguna" class="form-control"
id="status_pengguna" aria-describedby="status_pengguna" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="status_pengelolaan">status_pengelolaan</label>
<input type="text" name="status_pengelolaan" class="form-control"
id="status_pengelolaan" aria-describedby="status_pengelolaan" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="no_psp">no_psp</label>
<input type="text" name="no_psp" class="form-control"
id="no_psp" aria-describedby="no_psp" placeholder="Silahkan masukkan divisi anda">
</div>
<div class="form-group">
<label for="tgl_psp">tgl_psp</label>
<input type="text" name="tgl_psp" class="form-control"
id="tgl_psp" aria-describedby="tgl_psp" placeholder="Silahkan masukkan divisi anda">
</div>
                                
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('barang.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\peminjaman\peminjaman_bmn\resources\views/barang/create.blade.php ENDPATH**/ ?>