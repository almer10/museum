<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBendaPusakaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benda_pusaka', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('nama_benda');
            $table->integer('jumlah');
            $table->string('kondisi_dahulu');
            $table->string('kondisi_sekarang');
            $table->string('asal_perolehan');
            $table->text('deskripsi');
            $table->datetime('tanggal_perolehan');
            $table->string('tempat_penyimpanan');
            $table->string('foto');
            $table->string('spesifikasi');
            $table->text('keterangan_benda');
            $table->integer('id_admin');
            $table->dateTime('terakhir_edit');
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
        Schema::dropIfExists('benda_pusaka');
    }
}
