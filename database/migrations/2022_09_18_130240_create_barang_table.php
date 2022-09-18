<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_satker');
            $table->string('nama_satker');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('nup');
            $table->string('kondisi');
            $table->string('merk_tipe');
            $table->string('tgl_rekam_pertama');
            $table->string('tgl_perolehan');
            $table->string('nilai_perolehan_pertama');
            $table->string('nilai_mutasi');
            $table->string('nilai_perolehan');
            $table->string('nilai_penyusutan');
            $table->string('nilai_buku');
            $table->integer('kuantitas');
            $table->integer('jml_foto');
            $table->string('status_pengguna');
            $table->string('status_pengelolaan');
            $table->string('no_psp');
            $table->string('tgl_psp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
