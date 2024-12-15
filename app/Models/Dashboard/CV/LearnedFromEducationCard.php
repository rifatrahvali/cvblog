<?php

namespace App\Models\Dashboard\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearnedFromEducationCard extends Model
{
    use HasFactory;

    // Toplu atama yapılabilecek alanlar
    protected $fillable = [
        'education_card_id', // Bağlı olduğu eğitim kartı
        'degree', // Derece
        'main_achievement', // Ana kazanım
        'secondary_achievements' // Yan kazanımlar (JSON formatında)
    ];

    // Yan kazanımların JSON formatında okunmasını sağlar
    protected $casts = [
        'secondary_achievements' => 'array', // JSON => PHP array dönüşümü
    ];

    /**
     * Bu kartın ilişkili olduğu Education Card'ı döndürür.
     */
    public function educationCard()
    {
        return $this->belongsTo(EducationCard::class, 'education_card_id');
    }
}