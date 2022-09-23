
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail BMN - BPS Kota Malang
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>id: </b><?php echo e($Barang->id); ?></li>
<li class="list-group-item"><b>kode_satker: </b><?php echo e($Barang->kode_satker); ?></li>
<li class="list-group-item"><b>nama_satker: </b><?php echo e($Barang->nama_satker); ?></li>
<li class="list-group-item"><b>kode_barang: </b><?php echo e($Barang->kode_barang); ?></li>
<li class="list-group-item"><b>nama_barang: </b><?php echo e($Barang->nama_barang); ?></li>
<li class="list-group-item"><b>nup: </b><?php echo e($Barang->nup); ?></li>
<li class="list-group-item"><b>kondisi: </b><?php echo e($Barang->kondisi); ?></li>
<li class="list-group-item"><b>merk_tipe: </b><?php echo e($Barang->merk_tipe); ?></li>
<li class="list-group-item"><b>tgl_rekam_pertama: </b><?php echo e($Barang->tgl_rekam_pertama); ?></li>
<li class="list-group-item"><b>tgl_perolehan: </b><?php echo e($Barang->tgl_perolehan); ?></li>
<li class="list-group-item"><b>nilai_perolehan_pertama: </b><?php echo e($Barang->nilai_perolehan_pertama); ?></li>
<li class="list-group-item"><b>nilai_mutasi: </b><?php echo e($Barang->nilai_mutasi); ?></li>
<li class="list-group-item"><b>nilai_perolehan: </b><?php echo e($Barang->nilai_perolehan); ?></li>
<li class="list-group-item"><b>nilai_penyusutan: </b><?php echo e($Barang->nilai_penyusutan); ?></li>
<li class="list-group-item"><b>nilai_buku: </b><?php echo e($Barang->nilai_buku); ?></li>
<li class="list-group-item"><b>kuantitas: </b><?php echo e($Barang->kuantitas); ?></li>
<li class="list-group-item"><b>jml_foto: </b><?php echo e($Barang->jml_foto); ?></li>
<li class="list-group-item"><b>status_pengguna: </b><?php echo e($Barang->status_pengguna); ?></li>
<li class="list-group-item"><b>status_pengelolaan: </b><?php echo e($Barang->status_pengelolaan); ?></li>
<li class="list-group-item"><b>no_psp: </b><?php echo e($Barang->no_psp); ?></li>
<li class="list-group-item"><b>tgl_psp: </b><?php echo e($Barang->tgl_psp); ?></li>
</ul>
</div>
<a class="btn btn-success mt-3" href="<?php echo e(route('barang.index')); ?>">Kembali</a>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('barang.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\peminjaman\peminjaman_bmn\resources\views/barang/detail.blade.php ENDPATH**/ ?>