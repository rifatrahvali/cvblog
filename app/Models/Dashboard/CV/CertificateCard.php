<?php

namespace App\Models\Dashboard\CV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateCard extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'certificate_name', // Sertifika Adı
        'institution',      // Kurum Adı
        'field',            // Alan
    ];
}
