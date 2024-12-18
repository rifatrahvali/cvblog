<?php

namespace App\Models\Dashboard\Reference;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    //
    // Kullanılacak veritabanı bağlantısı
    protected $connection = 'reference';

    // Tablo adı
    protected $table = 'references';

    // Doldurulabilir alanlar
    protected $fillable = [
        'reference_name',
        'reference_comment',
        'reference_image',
    ];
}
