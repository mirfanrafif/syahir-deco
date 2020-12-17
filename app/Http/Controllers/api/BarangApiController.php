<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangApiController extends Controller
{
    public function cekKetersediaan(Request $request)
    {
        $barang = Barang::find($request->id);
        $tanggalSewa = $request->cektanggal;

        // return $tanggalSewa;
        $sewa = $barang->sewa->where('tanggal_sewa', $tanggalSewa)->count();

        if ($sewa < $barang->stok) {
            $data = [
                "status" => "ADA",
                "sewa" => $sewa
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "KOSONG",
                "sewa" => $sewa
            ];
            return response()->json($data);
        }
    }
}
