<?php

namespace App\Models\Dashboard\CV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCard extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'course_name',           // Kurs Adı
        'institution',           // Kurum Adı
        'additional_achievements', // Kazanımlar (JSON formatında)
    ];

    protected $casts = [
        'additional_achievements' => 'array', // JSON verisini array olarak döndürmek için
    ];
}
