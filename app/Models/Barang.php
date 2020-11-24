<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang";
    protected $primaryKey = "idbarang";
    protected $fillable = ["jenis_paket", "keterangan", "stok", "harga", "kategori", "kategori_acara"];

    public function sewa() {
        return $this->hasMany('App\Models\Sewa', 'barang_idbarang');
    }
}
