<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta',100);
            $table->string('nomor_induk',100);
            $table->enum('jenis_kelamin', ['Laki-laki','Perempuan']);
            $table->string('no_hp',20);
            $table->enum('status', ['Siswa','Mahasiswa','Guru']);
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->integer('institut_id');
            $table->integer('kerjasama_id');
            $table->integer('dokumen_id');
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
        Schema::dropIfExists('pesertas');
    }
}
