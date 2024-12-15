<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'header_title',
        'header_subtitle',
        'footer_text',
        'footer_year',
    ];
}
