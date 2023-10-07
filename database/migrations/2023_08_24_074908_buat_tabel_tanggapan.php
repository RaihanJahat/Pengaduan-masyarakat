<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tanggapan',function(Blueprint $tabel){
            $tabel->integer('id_tanggapan');
            $tabel->integer('id_pengaduan');
            $tabel->date('tgl_tanggapan');
            $tabel->text('tanggapan');
            $tabel->integer('id_petugas');
            $tabel->timestamps();
            $tabel->primary('id_tanggapan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tanggapan');
    }
};
