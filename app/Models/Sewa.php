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
}
