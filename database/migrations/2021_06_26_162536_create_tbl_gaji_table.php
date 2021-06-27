<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gaji', function (Blueprint $table) {
            $table->bigIncrements('id_gaji');
            $table->integer('id_karyawan');
            $table->integer('id_absensi');
            $table->date('tgl_gaji');
            $table->integer('total_gaji_pokok');
            $table->integer('total_tunjangan');
            $table->integer('total_lembur');
            $table->integer('bpjs');
            $table->integer('nwnp');
            $table->integer('total_penerimaan');
            $table->softDeletes();
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
        Schema::dropIfExists('tbl_gaji');
    }
}
