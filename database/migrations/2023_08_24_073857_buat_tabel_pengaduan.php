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
        Schema::create('pengaduan',function(Blueprint $tabel){
            $tabel->integer('id_pengaduan');
            $tabel->date('tgl_pengaduan');
            $tabel->char('Nik',16);
            $tabel->text('isi_laporan');
            $tabel->string('foto',255);
            $tabel->enum('Status',['proses','selesai','0']);
            $tabel->timestamps();
            $tabel->primary('id_pengaduan');
        });
    }
   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pengaduan');
    }
};
