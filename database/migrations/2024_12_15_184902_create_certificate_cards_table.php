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
        Schema::create('certificate_cards', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('certificate_name'); // Sertifika Adı
            $table->string('institution');      // Kurum Adı
            $table->string('field');            // Alan
            $table->timestamps();               // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate_cards');
    }
};
