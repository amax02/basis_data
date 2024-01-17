<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelajaranTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->id('JadwalID');
            $table->string('Kelas');
            $table->string('Hari');
            $table->time('JamMulai');
            $table->time('JamSelesai');
            $table->foreignId('GuruID')->constrained('guru');
            $table->foreignId('MataPelajaranID')->constrained('mata_pelajaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_pelajaran');
    }
}
