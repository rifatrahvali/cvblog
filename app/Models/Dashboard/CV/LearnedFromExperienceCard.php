<?php

namespace App\Models\Dashboard\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearnedFromExperienceCard extends Model
{
    use HasFactory;

    // Tablo adını manuel olarak belirtelim
    protected $table = 'learned_from_experience_cards';

    // Toplu atamaya izin verilen alanlar
    protected $fillable = [
        'experience_card_id', // Bu öğrenim kaydının hangi deneyime ait olduğunu belirtir
        'sentence',           // Öğrenilen becerinin kısa bir cümle açıklaması
        'section',            // Becerinin ait olduğu bölüm
        'work_tags',          // İşle ilgili etiketler (JSON formatında saklanır)
    ];

    // JSON verisini array olarak döndürmek için casting
    protected $casts = [
        'work_tags' => 'array', // JSON formatında saklanan alanı array olarak okuyalım
    ];

    // İlgili deneyim kartıyla ilişki
    public function experience()
    {
        // belongsTo: Bu öğrenim kaydı yalnızca bir deneyime ait olabilir
        return $this->belongsTo(ExperienceCard::class, 'experience_card_id');
    }
}

