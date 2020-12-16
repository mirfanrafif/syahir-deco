<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Sewa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = Sewa::paginate(12);
        return view('admin/sewa/sewauser', ['sewa' => $sewa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $barang = Barang::all();
        $user = User::all();
        $sewa = Sewa::all();
        return view("admin/sewa/tambahsewa", ['sewa' => $sewa, 'barang'=>$barang,'user'=>$user]);
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

        $sewa = new Sewa();
        $sewa->tanggal_sewa = $request->tanggal_sewa;
        $sewa->tanggal_transaksi = $request->tanggal_transaksi;
        $sewa->status = $request->status;
        $sewa->barang_idbarang = $request->barang;
        $sewa->user_id = $request->user;

        if ($sewa->save()) {
            return redirect('/admin/persewaan');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sewa =  Sewa::find($id);
        $barang = Barang::all();
        $user = User::all();
        return view("admin/sewa/editsewa",['sewa'=>$sewa, 'barang'=>$barang,'user'=>$user]);
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
        $sewa = Sewa::findOrFail($id);
        $sewa->tanggal_sewa = $request->tanggal_sewa;
        $sewa->tanggal_transaksi = $request->tanggal_transaksi;
        $sewa->status = $request->status;
        $sewa->barang_idbarang = $request->barang;
        $sewa->user_id = $request->user;
        
        if ($sewa->save()) {
            return redirect('/admin/persewaan');
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
        $sewa = Sewa::findOrFail($id);

        // if (count($sewa->user) == 0) {
            $sewa->delete();
            return redirect('/admin/persewaan')->with('message', 'Berhasil Menghapus Data');;
        // } else {
            // return redirect('/user')->with('message', 'Gagal Menghapus Data. Pindahkan siswa ke user lain terlebih dahulu.');
        // }

    }
    public function cariSewa(Request $request)
    {
        $keyword = $request->keyword;
        echo $keyword;
        $cek =  Sewa::where('jenis_paket','like',"%".$keyword."%")->paginate();
        if (Sewa::where('jenis_paket','like',"%".$keyword."%")->exists()) {
            return view('admin/sewa/sewauser', ['persewaan' => Sewa::where('jenis_paket','like',"%".$keyword."%")->paginate()]);
        }elseif(Sewa::where('keterangan','like',"%".$keyword."%")->exists()) {
            return view('admin/sewa/sewauser', ['persewaan' => Sewa::where('keterangan','like',"%".$keyword."%")->paginate()]);
        }else {
            return view('admin/sewa/sewauser', ['persewaan' => $cek]);
            
        }

        return view('admin/sewa/sewauser', ['persewaan' => $cek]);
    }
}
