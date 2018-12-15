<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_induk')->unsigned();
            $table->foreign('nomor_induk')->references('id')->on('karyawans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama');
            $table->string('bulan');
            $table->integer('tahun');
            $table->integer('gaji_pokok');
            $table->integer('tunjangan_jabatan');
            $table->integer('tunjangan_keluarga');
            $table->integer('uang_makan');
            $table->integer('uang_lembur');
            $table->integer('persen_pot_pph');
            $table->integer('persen_pot_jamsostek');
            $table->string('jabatan');
            $table->string('cabang');
            $table->string('departemen');
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('rekening_atas_nama');
            $table->integer('total_gaji');
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
        Schema::dropIfExists('gajis');
    }
}
