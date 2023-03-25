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
        Schema::create('jurnals', function (Blueprint $table) {
            $table->bigIncrements('id_jurnal');
            $table->string('no_nota');
            $table->integer('id_buku');
            $table->integer('id_akun');
            $table->date('tgl');
            $table->string('ket');
            $table->integer('id_post');
            $table->double('debit');
            $table->double('kredit');
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
        Schema::dropIfExists('jurnals');
    }
};
