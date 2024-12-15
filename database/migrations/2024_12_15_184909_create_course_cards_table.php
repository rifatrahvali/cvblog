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
        Schema::create('course_cards', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('course_name');           // Kurs Adı
            $table->string('institution');           // Kurum Adı
            $table->json('additional_achievements'); // Kazanımlar (JSON formatında)
            $table->timestamps();                    // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_cards');
    }
};
