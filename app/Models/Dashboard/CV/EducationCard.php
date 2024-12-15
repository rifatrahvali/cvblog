<?php

namespace App\Models\Dashboard\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationCard extends Model
{
    use HasFactory;

    // Toplu atama yapılabilecek alanlar
    protected $fillable = [
        'section', // Eğitim seviyesi
        'city', // Şehir
        'school_name', // Okul adı
        'department', // Bölüm adı
        'start_year', // Başlangıç yılı
        'end_year' // Bitiş yılı
    ];

    /**
     * Education Card'ın ilişkili Learned From Education Card'larını döndürür.
     */
    public function learnedFromEducationCards()
    {
        return $this->hasMany(LearnedFromEducationCard::class, 'education_card_id');
    }
}