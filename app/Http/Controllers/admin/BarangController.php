<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        $barang = DB::table('barang')->get();

        return view('admin/barang/baranguser', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/barang/tambahbarang");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $barang = new Barang();
        $barang->jenis_paket = $request->jenis_paket;
        $barang->keterangan = $request->keterangan;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        $barang->kategori = $request->kategori;
        $barang->kategori_acara = $request->kategori_acara;

        if ($barang->save()) {
            return redirect('/admin/barang');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("admin/adminbarang");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = DB::table('barang')->where('idbarang', $id)->get();
        return view("admin/barang/editbarang", ['barang' => $barang]);
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
        //
        $barang = Barang::findOrFail($id);
        $barang->jenis_paket = $request->jenis_paket;
        $barang->keterangan = $request->keterangan;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        $barang->kategori = $request->kategori;
        $barang->kategori_acara = $request->kategori_acara;

        if ($barang->save()) {
            return redirect('/admin/barang');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barang = Barang::findOrFail($id);

        if (count($barang->sewa) == 0) {
            $barang->delete();
            return redirect('/admin/barang')->with('message', 'Berhasil Menghapus Data');;
        } else {
            return redirect('/user')->with('message', 'Gagal Menghapus Data. Pindahkan siswa ke user lain terlebih dahulu.');
        }
    }
}
