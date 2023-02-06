<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password'); 
            $table->string('nama');
            $table->string('no_ktp');
            $table->boolean('status');
            $table->string('alamat');
            $table->dateTime('tanggal_lahir');
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_akhir');
            $table->string('pekerjaan');
            $table->text('keterangan');
            $table->boolean('aktif');
            $table->text('keterangan_non_aktif')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
