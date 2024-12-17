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
        Schema::connection('gallery')->create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Görsel adı
            $table->string('image'); // Görsel yolu
            $table->string('description')->nullable(); // Görsel açıklaması
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_images');
    }
};
