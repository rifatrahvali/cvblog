<?php

namespace App\Models\Dashboard\CV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileCard extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'profil_image',
        'fullname',
        'title',
        'username',
        'github_link',
        'instagram_link',
        'youtube_link',
        'linkedin_link',
        'x_link',
        'email',
    ];
}
