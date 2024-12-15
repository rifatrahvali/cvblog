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
        Schema::create('education_cards', function (Blueprint $table) {
            $table->id(); // Otomatik olarak artan birincil anahtar
            $table->string('section'); // Eğitim seviyesi (örneğin Lise, Üniversite)
            $table->string('city'); // Şehir adı
            $table->string('school_name'); // Okul adı
            $table->string('department'); // Bölüm adı
            $table->date('start_year'); // Başlangıç yılı
            $table->date('end_year')->nullable(); // Bitiş yılı (opsiyonel)
            $table->timestamps(); // created_at ve updated_at zaman damgaları
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_cards');
    }
};
