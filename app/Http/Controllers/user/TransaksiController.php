<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
