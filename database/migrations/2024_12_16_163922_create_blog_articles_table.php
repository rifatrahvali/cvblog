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
        Schema::connection('blog')->create('blog_articles', function (Blueprint $table) {
            $table->id(); // Birincil anahtar
            $table->foreignId('category_id')->constrained('blog_categories')->onDelete('cascade'); // Kategori ilişkisi
            $table->string('name'); // Makale başlığı
            $table->string('slug')->unique(); // Benzersiz slug
            $table->json('tags')->nullable(); // JSON formatında etiketler
            $table->text('content'); // Makale içeriği
            $table->string('image')->nullable(); // Görsel yolu
            $table->boolean('is_visible')->default(true); // Görünürlük durumu
            $table->timestamps(); // Oluşturulma ve güncelleme tarihleri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_articles');
    }
};
