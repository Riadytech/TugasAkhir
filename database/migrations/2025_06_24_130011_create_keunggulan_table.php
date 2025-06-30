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
        Schema::create('keunggulan', function (Blueprint $table) {
        $table->id();
        $table->string('icon');       // ex: flaticon-like
        $table->string('judul');      // ex: Best Price Guarantee
        $table->text('deskripsi');    // kalimat singkat
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keunggulan');
    }
};
