<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\BarangExport;
use App\Imports\BarangImport;
use Maatwebsite\Excel\Facades\Excel;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = $barang = DB::table('barang')->get(); // Mengambil semua isi tabel
        $posts = Barang::orderBy('id', 'desc')->paginate(6);
        return view('barang.index', compact('barang'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'id' => 'required',
            'kode_satker'=> 'required',
            'nama_satker'=> 'required',
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
            'nup','kondisi'=> 'required',
            'merk_tipe'=> 'required',
            'tgl_rekam_pertama'=> 'required',
            'tgl_perolehan'=> 'required',
            'nilai_perolehan_pertama'=> 'required',
            'nilai_mutasi'=> 'required',
            'nilai_perolehan'=> 'required',
            'nilai_penyusutan'=> 'required',
            'nilai_buku'=> 'required',
            'kuantitas'=> 'required',
            'jml_foto'=> 'required',
            'status_pengguna'=> 'required',
            'status_pengelolaan'=> 'required',
            'no_psp'=> 'required',
            'tgl_psp'=> 'required'
        ]);
        //fungsi eloquent untuk menambah data
        Barang::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')
        ->with('success', 'Data barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // //menampilkan detail data dengan menemukan/berdasarkan Nim Pegawai
        $Barang = Barang::find($id);
        return view('barang.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Barang = DB::table('barang')->where('id', $id)->first();
        return view('barang.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'id' => 'required',
            'kode_satker'=> 'required',
            'nama_satker'=> 'required',
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
            'nup'=> 'required',
            'kondisi'=> 'required',
            'merk_tipe'=> 'required',
            'tgl_rekam_pertama'=> 'required',
            'tgl_perolehan'=> 'required',
            'nilai_perolehan_pertama'=> 'required',
            'nilai_mutasi'=> 'required',
            'nilai_perolehan'=> 'required',
            'nilai_penyusutan'=> 'required',
            'nilai_buku'=> 'required',
            'kuantitas'=> 'required',
            'jml_foto'=> 'required',
            'status_pengguna'=> 'required',
            'status_pengelolaan'=> 'required',
            'no_psp'=> 'required',
            'tgl_psp'=> 'required' 
    ]);
    //fungsi eloquent untuk mengupdate data inputan kita
    Barang::find($id)->update($request->all());
    //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
    Barang::find($id)->delete();
    return redirect()->route('barang.index') ->with('success', 'Data Pegawai Berhasil Dihapus');
    }

    public function export() 
    {
        return Excel::download(new BarangExport, 'barang.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new BarangImport,request()->file('file'));
               
        return back();
    }
}
