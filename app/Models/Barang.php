<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table="barang";
    protected $fillable=['kode_satker','nama_satker','kode_barang','nama_barang','nup','kondisi','merk_tipe','tgl_rekam_pertama','tgl_perolehan','nilai_perolehan_pertama','nilai_mutasi','nilai_perolehan','nilai_penyusutan','nilai_buku','kuantitas','jml_foto','status_pengguna','status_pengelolaan','no_psp','tgl_psp'];
}
