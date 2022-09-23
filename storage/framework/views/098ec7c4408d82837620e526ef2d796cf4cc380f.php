
<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h3 style="text-align: center">Data Barang - Badan Pusat Statistik 
(BPS) Kota Malang</h3>
</div>
<div class="float-right my-2">
<a class="btn btn-success" href="<?php echo e(route('barang.create')); ?>"> Input Barang</a>
</div>
<form action="<?php echo e(route('barang.import')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="file" name="file" class="form-control">
    <br>
    <button class="btn btn-success">Import Barang Data</button>
</form>
<a class="btn btn-warning float-end" href="<?php echo e(route('barang.export')); ?>">Export barang Data</a>
</div>
</div>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
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
<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="text-align: center">
<td><?php echo e($loop->iteration); ?></td>
<td><?php echo e($brg ->id); ?></td>
<td><?php echo e($brg ->kode_satker); ?></td>
<td><?php echo e($brg ->nama_satker); ?></td>
<td><?php echo e($brg ->kode_barang); ?></td>
<td><?php echo e($brg ->nama_barang); ?></td>
<td><?php echo e($brg ->nup); ?></td>
<td><?php echo e($brg ->kondisi); ?></td>
<td><?php echo e($brg ->merk_tipe); ?></td>
<td><?php echo e($brg ->tgl_rekam_pertama); ?></td>
<td><?php echo e($brg ->tgl_perolehan); ?></td>
<td><?php echo e($brg ->nilai_perolehan_pertama); ?></td>
<td><?php echo e($brg ->nilai_mutasi); ?></td>
<td><?php echo e($brg ->nilai_perolehan); ?></td>
<td><?php echo e($brg ->nilai_penyusutan); ?></td>
<td><?php echo e($brg ->nilai_buku); ?></td>
<td><?php echo e($brg ->kuantitas); ?></td>
<td><?php echo e($brg ->jml_foto); ?></td>
<td><?php echo e($brg ->status_pengguna); ?></td>
<td><?php echo e($brg ->status_pengelolaan); ?></td>
<td><?php echo e($brg ->no_psp); ?></td>
<td><?php echo e($brg ->tgl_psp); ?></td>

<td>
<form action="<?php echo e(route('barang.destroy',['barang'=>$brg->id])); ?>" method="POST">
<a class="btn btn-info" href="<?php echo e(route('barang.show',$brg->id)); ?>">Show</a>
<a class="btn btn-primary" href="<?php echo e(route('barang.edit',$brg->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('barang.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\peminjaman\peminjaman_bmn\resources\views/barang/index.blade.php ENDPATH**/ ?>