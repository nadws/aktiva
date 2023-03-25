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
        Schema::create('nilai_buku_aktiva', function (Blueprint $table) {
            $table->bigIncrements('id_nilai_buku_aktiva');
            $table->integer('id_aktiva');
            $table->string('no_nota');
            $table->date('tgl');
            $table->double('harga_perolehan');
            $table->string('keterangan');
            $table->integer('id_kelompok');
            $table->double('beban_penyesuaian');
            $table->double('penyesuaian');
            $table->string('admin');
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
        Schema::dropIfExists('nilai_buku_aktiva');
    }
};
