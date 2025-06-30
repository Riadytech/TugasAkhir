<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Judul besar
            $table->string('subtitle')->nullable(); // Subjudul
            $table->string('background_image')->nullable(); // Gambar hero atas
            $table->string('about_image')->nullable(); // Gambar samping konten
            $table->string('judul_1')->nullable(); // Judul Tab 1
            $table->text('konten_1')->nullable();  // Konten Tab 1
            $table->string('judul_2')->nullable(); // Judul Tab 2
            $table->text('konten_2')->nullable();  // Konten Tab 2
            $table->string('judul_3')->nullable(); // Judul Tab 3
            $table->text('konten_3')->nullable();  // Konten Tab 3
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
