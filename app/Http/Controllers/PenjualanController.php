<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Penjualan.index', ["title" => "Data Penjualan", "penjualan" => Penjualan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Penjualan.create", ["title" => "Tambah Penjualan", "barang" => Barang::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = Barang::find($request->barang_id);

        $validateData = $request->validate([
            "kode_penjualan" => "required",
            "barang_id" => "required",
            "terjual" => "required",
        ]);

        $barangUpdate = [
            "stok" => intval($barang->stok - $request->terjual)
        ];
        Penjualan::create($validateData);

        Barang::where("id", intval($request->barang_id))->update($barangUpdate);

        return redirect('/penjualan')->with('success', 'Data Penjualan berhasil di ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        return view("Penjualan.edit", ["title" => "Edit Penjualan", "penjualan" => $penjualan, "barang" => Barang::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $validateData = $request->validate([
            "kode_penjualan" => "required",
            "barang_id" => "required",
            "terjual" => "required",
        ]);
        Penjualan::Where("id", $penjualan->id)->update($validateData);
        return redirect('/penjualan')->with('success', 'Data Barang berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        Penjualan::destroy($penjualan->id);
        return redirect('/penjualan')->with('success', 'Data Barang berhasil di di hapus!');
    }
}
