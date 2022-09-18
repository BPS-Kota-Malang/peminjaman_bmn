<?php
  
namespace App\Imports;
  
use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;
  
class BarangImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'kode_satker'     => $row[1],
            'nama_satker'    => $row[2],
            'kode_barang'    => $row[3],
            'nama_barang'    => $row[4],
            'nup'    => $row[5],
            'kondisi'    => $row[6],
            'merk_tipe'    => $row[7],
            'tgl_rekam_pertama'    => $row[8],
            'tgl_perolehan'    => $row[9],
            'nilai_perolehan_pertama'    => $row[10],
            'nilai_mutasi'    => $row[11],
            'nilai_perolehan'    => $row[12],
            'nilai_penyusutan'    => $row[13],
            'nilai_buku'    => $row[14],
            'kuantitas'    => $row[15],
            'jml_foto'    => $row[16],
            'status_pengguna'    => $row[17],
            'status_pengelolaan'    => $row[18],
            'no_psp'    => $row[19],
            'tgl_psp'    => $row[20],
            
        ]);
    }
}