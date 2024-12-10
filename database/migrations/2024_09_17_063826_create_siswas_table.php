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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('sekolah_asal');
            $table->string('alamat');
            $table->string('nomor');
            $table->string('wali');
            $table->string('foto');
            $table->string('kk');
            $table->string('akta');
            $table->string('ijazah');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pend_terakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
