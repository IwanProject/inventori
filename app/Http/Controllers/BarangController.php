<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Barang.index', [
            "title" => "Data Barang",
            "barang" => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Barang.create", ["title" => "Tambah Data Barang"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "kode_barang" => "required",
            "nama_barang" => "required",
            "kategori" => "required",
            "satuan" => "required",
            "harga" => "required",
            "stok" => "required",
        ]);
        Barang::create($validateData);
        return redirect('/barang')->with('success', 'Data Barang berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view("Barang.edit", ["title" => "Edit Barang", "barang" => $barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validateData = $request->validate([
            "kode_barang" => "required",
            "nama_barang" => "required",
            "kategori" => "required",
            "satuan" => "required",
            "harga" => "required",
            "stok" => "required",
        ]);
        Barang::where("id", $barang->id)->update($validateData);
        return redirect('/barang')->with('success', 'Data Barang berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/barang')->with('success', 'Data Barang berhasil di hapus!');
    }
}
