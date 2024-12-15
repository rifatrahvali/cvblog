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
        Schema::create('learned_from_education_cards', function (Blueprint $table) {
            $table->id(); // Otomatik olarak artan birincil anahtar
            $table->foreignId('education_card_id') // Education Card ile ilişki
                ->constrained('education_cards')
                ->onDelete('cascade'); // Bağlı ana kart silinirse, bu kartlar da silinir
            $table->string('degree'); // Derece (örneğin Lise, Üniversite)
            $table->string('main_achievement'); // Ana kazanım (örneğin Yazılım & Tasarım)
            $table->json('secondary_achievements')->nullable(); // Yan kazanımlar (JSON formatında)
            $table->timestamps(); // created_at ve updated_at zaman damgaları
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learned_from_education_cards');
    }
};
