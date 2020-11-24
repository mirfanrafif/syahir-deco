<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = "persewaan";
    protected $primaryKey = "idpersewaan";
    protected $fillable = ["tanggal_sewa", "tanggal_transaksi", "status", "barang_idbarang", "user_id"];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'barang_idbarang', 'idbarang');
    }
}
