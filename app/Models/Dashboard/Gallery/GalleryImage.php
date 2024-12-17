<?php

namespace App\Models\Dashboard\Gallery;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $connection = 'gallery'; // Bağlantı adı
    protected $table = 'gallery_images'; // Tablo adı
    protected $fillable = ['name', 'image', 'description'];
}
