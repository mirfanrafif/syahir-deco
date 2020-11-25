<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class TransaksiController extends Controller
{
    public function index()
    {
        $dataSewa = Sewa::where('user_id', Auth::user()->id)->get();
        return view('user.sewa.index', ["dataSewa" => $dataSewa]);
    }

    public function bayar(Request $request)
    {
        $dataSewa = Sewa::find($request->id);
        return view('user.sewa.bayar', ["sewa" => $dataSewa]);
    }

    public function prosesBayar(Request $request) 
    { 
        $file = $request->file('bukti')->store('bukti');


        $idSewa = $request->id;
        $sewa = Sewa::find($idSewa);
        $sewa->nama_file_bukti = $file;
        $sewa->status = 1;
        $sewa->save();

        return redirect('/user/sewa');
    }
}
