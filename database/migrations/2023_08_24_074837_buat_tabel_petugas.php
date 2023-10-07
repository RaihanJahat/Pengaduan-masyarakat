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
        Schema::create('petugas',function(Blueprint $tabel){
            $tabel->integer('id_petugas');
            $tabel->string('Nama_petugas',35);
            $tabel->string('Username',25);
            $tabel->string('Password',32);
            $tabel->string('Telp',13);
            $tabel->enum('Level',['admin','petugas']);
            $tabel->timestamps();
            $tabel->primary('id_petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('petugas');
    }
};
