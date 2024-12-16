<?php

namespace App\Models\Dashboard\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
    protected $connection = 'blog'; // Veritabanı bağlantısı
    protected $table = 'blog_articles'; // Tablo adı

    protected $fillable = [
        'name', 'slug', 'category_id', 'tags', 'content', 'image', 'is_visible'
    ];

    // Slug oluşturma
    protected static function booted()
    {
        static::creating(function ($article) {
            $article->slug = static::generateUniqueSlug($article->name);
        });
    }

    public static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    // Kategori ile ilişki
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
}
