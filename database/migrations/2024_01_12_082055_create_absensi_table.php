<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('AbsensiID');
            $table->foreignId('SiswaID')->constrained('siswa');
            $table->date('Tanggal');
            $table->enum('StatusKehadiran', ['Hadir', 'Izin', 'Alpha']);
            $table->string('Keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
