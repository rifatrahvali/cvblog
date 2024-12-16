<?php

namespace App\Models\Dashboard\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $connection = 'blog'; // Doğru veritabanı bağlantısını kullan
    protected $table = 'blog_categories'; // Tablo a
    protected $fillable = ['name', 'slug', 'description', 'tags', 'image', 'parent_id', 'is_visible'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = static::generateUniqueSlug($category->name);
        });

        static::updating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = static::generateUniqueSlug($category->name, $category->id);
            }
        });
    }

    public static function generateUniqueSlug($name, $excludeId = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        // Benzersiz slug kontrolü
        while (
            static::where('slug', $slug)->when($excludeId, function ($query, $excludeId) {
                return $query->where('id', '!=', $excludeId);
            })->exists()
        ) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    public function parent()
    {
        return $this->belongsTo(BlogCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(BlogCategory::class, 'parent_id');
    }
    public function articles()
    {
        return $this->hasMany(BlogArticle::class, 'category_id');
    }
}
