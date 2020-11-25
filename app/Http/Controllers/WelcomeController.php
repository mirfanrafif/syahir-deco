<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Sewa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function barang(Request $request){
        if ($request->has('kategori')) {
            $barang = Barang::where('kategori', 'LIKE', '%'. $request->kategori .'%')->get();
            return view("gridbarang", ["barangs" => $barang]);
        }else if ($request->paket) {
            $barang = Barang::where('kategori_acara', $request->paket)->get();
            return view("gridbarang", ["barangs" => $barang]);
        }else{
            $barang = Barang::all();
            return view("gridbarang", ["barangs" => $barang]);
        }
    }

    public function detail(Request $request)
    {
        $id = $request->id;

        $data = Barang::find($id);

        return view("detailbarang", ["barang" => $data]);
    }

    public function sewa()
    {
        $barang = Barang::all();
        return view('user.sewa', ["barangs" => $barang]);
    }

    public function prosesSewa(Request $request)
    {
        $request->validate([
            'tanggal_sewa' => ['required', 'date'],
            'barang_idbarang' => ['required']
        ]);

        $sewa = new Sewa();
        $sewa->tanggal_sewa = $request->tanggal_sewa;
        $sewa->tanggal_transaksi = Carbon::now()->format('y-m-d');
        $sewa->status = 0;
        $sewa->barang_idbarang = $request->barang_idbarang;
        $sewa->user_id = Auth::user()->id;
        $sewa->save();

        return redirect('user/sewa');
    }
}
