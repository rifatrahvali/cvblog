<?php

namespace App\Models\Dashboard\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
    protected $connection = 'blog'; // Bağlantı olarak blog veritabanını kullan
    protected $table = 'blog_articles'; // Tablo ismini belirt
    protected $fillable = ['title', 'slug', 'content', 'is_visible', 'category_id', 'tags', 'image']; // Doldurulabilir alanlar

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id'); // Kategori ilişkisi
    }

    // Slug alanını kontrol ederek otomatik doldur
    public static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $slug = Str::slug($article->title); // Başlıktan slug oluştur
            $originalSlug = $slug;
            $count = 1;

            // Slug benzersiz olana kadar döngüye gir
            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $article->slug = $slug; // Slug'ı kaydet
        });
    }
}
