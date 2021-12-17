<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriBarangKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seri_barang_keluar', function (Blueprint $table) {
            $table->id();
            $table->integer('seri_id');
            $table->integer('supir_id');
            $table->string('pengantar');
            $table->date('date_out');
            $table->string('no_sj');
            $table->string('nopol')->nullable();
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
        Schema::dropIfExists('seri_barang_keluar');
    }
}
