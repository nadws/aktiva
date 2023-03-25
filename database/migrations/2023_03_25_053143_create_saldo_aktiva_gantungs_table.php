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
        Schema::create('saldo_aktiva_gantung', function (Blueprint $table) {
            $table->bigIncrements('id_saldo_aktiva_gantung');
            $table->integer('id_aktiva');
            $table->string('no_nota');
            $table->double('debit');
            $table->string('keterangan');
            $table->date('tgl');
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
        Schema::dropIfExists('saldo_aktiva_gantung');
    }
};
