<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

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
        $id = $request["id"];

        $data = Barang::find($id);

        return view("detailbarang", ["barang" => $data]);
    }
}
