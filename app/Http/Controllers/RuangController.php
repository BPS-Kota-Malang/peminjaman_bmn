<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang = Ruang::all();
        return view('ruang.index', compact('ruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruang = Ruang::all();
        return view('ruang.addForm', compact('ruang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruang = new Ruang();

        $ruang->nama_ruang=$request->nama_ruang;
        $ruang->kapasitas=$request->kapasitas;
        $ruang->save();

        return redirect()->route('ruang.index')->with('status', 'Data ruang Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruang = Ruang::find($id);
        return view('ruang.detailForm', compact('ruang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruang = Ruang::find($id);
        return view('ruang.editForm', compact('ruang'));
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
        $ruang = Ruang::find($id);
        $ruang->nama_ruang=$request->nama_ruang;
        $ruang->kapasitas=$request->kapasitas;
        $ruang->save();

        return redirect()->route('ruang.index')->with('status', 'Data ruang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruang = Ruang::find($id);
        $ruang->delete();

        return redirect()->route('ruang.index')->with('status', 'Data ruang Berhasil Dihapus');
    }
}
