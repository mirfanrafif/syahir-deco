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
        if ($dataSewa->nama_file_bukti) {
            $bukti = Storage::url($dataSewa->nama_file_bukti);
        }else{
            $bukti = "";
        }
        return view('user.sewa.bayar', ["sewa" => $dataSewa, "bukti" => $bukti]);
    }

    public function prosesBayar(Request $request) 
    { 
        $request->validate([
            'bukti' => ['required', 'mimes:jpeg,bmp,png']
        ]);

        $file = $request->file('bukti')->store('public/bukti');

        $idSewa = $request->id;
        $sewa = Sewa::find($idSewa);
        $sewa->nama_file_bukti = $file;
        $sewa->status = 1;
        $sewa->save();

        return redirect('/user/sewa');
    }
}
