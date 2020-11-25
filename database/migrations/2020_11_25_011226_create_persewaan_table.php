<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersewaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persewaan', function (Blueprint $table) {
            $table->bigIncrements('idpersewaan');
            $table->date('tanggal_sewa');
            $table->date('tanggal_transaksi');
            $table->integer('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barang_idbarang');

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('barang_idbarang')->references('idbarang')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persewaan');
    }
}
