<?php
  
namespace App\Exports;
  
use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class BarangExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::select('id','kode_satker','nama_satker','kode_barang','nama_barang','nup','kondisi','merk_tipe','tgl_rekam_pertama','tgl_perolehan','nilai_perolehan_pertama','nilai_mutasi','nilai_perolehan','nilai_penyusutan','nilai_buku','kuantitas','jml_foto','status_pengguna','status_pengelolaan','no_psp','tgl_psp')->get();
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ['id','kode_satker','nama_satker','kode_barang','nama_barang','nup','kondisi','merk_tipe','tgl_rekam_pertama','tgl_perolehan','nilai_perolehan_pertama','nilai_mutasi','nilai_perolehan','nilai_penyusutan','nilai_buku','kuantitas','jml_foto','status_pengguna','status_pengelolaan','no_psp','tgl_psp'];
    }
}
