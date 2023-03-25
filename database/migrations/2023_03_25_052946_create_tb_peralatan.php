<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peralatan', function (Blueprint $table) {
            $table->integerIncrements('id_peralatan');
            $table->string('nm_barang');
            $table->date('tgl_pembelian');
            $table->double('jml_harga');
            $table->integer('jml_cicilan');
            $table->integer('cicilan_ke');
            $table->date('tgl_cicilan');
            $table->double('jml_cicilan_dibayar');
            $table->integer('akun_pembelian');
            $table->integer('akun_pembayaran');
            $table->enum('status_pembayaran', ['lunas', 'dicicil']);
            $table->integer('id_kelompok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_peralatan');
    }
};
