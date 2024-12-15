<?php

namespace App\Models\Dashboard\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCard extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'description',
    ];
}
