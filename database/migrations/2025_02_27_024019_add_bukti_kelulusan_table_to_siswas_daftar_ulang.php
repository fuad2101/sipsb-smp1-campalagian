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
        Schema::table('siswas_daftar_ulang', function (Blueprint $table) {
            $table->string('bukti_kelulusan')->after('sekolah_asal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswas_daftar_ulang', function (Blueprint $table) {
            //
        });
    }
};
