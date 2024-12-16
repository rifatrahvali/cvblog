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
            $table->id(); // Birincil anahtar ID
            $table->string('title'); // Makale başlığı
            $table->string('slug')->unique(); // Slug, benzersiz olmalı
            $table->text('content')->nullable(); // İçerik alanı, boş olabilir
            $table->boolean('is_visible')->default(true); // Görünürlük durumu, varsayılan true
            $table->foreignId('category_id')->constrained('blog_categories'); // Kategori ID, ilişkili
            $table->string('tags')->nullable(); // Etiketler, boş olabilir
            $table->string('image')->nullable(); // Görsel yolu, boş olabilir
            $table->timestamps(); // Oluşturulma ve güncellenme tarihleri
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
