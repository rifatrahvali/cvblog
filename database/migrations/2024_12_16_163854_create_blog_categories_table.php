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
        Schema::connection('blog')->create('blog_categories', function (Blueprint $table) {
            $table->id(); // Birincil anahtar ID
            $table->string('name'); // Kategori adı
            $table->string('slug')->unique(); // Slug, benzersiz olmalı
            $table->string('description')->nullable(); // Açıklama alanı, boş olabilir
            $table->string('tags')->nullable(); // Etiketler, boş olabilir
            $table->string('image')->nullable(); // Görsel yolu, boş olabilir
            $table->integer('parent_id')->nullable(); // Üst kategori ID, boş olabilir
            $table->boolean('is_visible')->default(true); // Görünürlük durumu, varsayılan true
            $table->timestamps(); // Oluşturulma ve güncellenme tarihleri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};
