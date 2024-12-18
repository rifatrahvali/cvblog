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
        Schema::connection('reference')->create('references', function (Blueprint $table) {
            $table->id(); // Birincil anahtar
            $table->string('reference_name'); // Referans adı
            $table->string('reference_comment')->nullable(); // Referans açıklaması
            $table->string('reference_image'); // Referans görsel yolu
            $table->timestamps(); // Oluşturulma ve güncellenme tarihleri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
