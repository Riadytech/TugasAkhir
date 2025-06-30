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
        Schema::table('keunggulan', function (Blueprint $table) {
        $table->string('gambar_icon')->nullable();

        // Hapus kolom lama kalau sudah tidak dipakai
        $table->dropColumn('icon');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('keunggulans', function (Blueprint $table) {
            //
        });
    }
};
