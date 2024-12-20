<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
# Invitation modeli için:
class Invitation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'email','token','expires_at','used','used_at'
    ];

    protected $dates = ['expires_at','used_at'];

    public function isExpired()
    {
        return $this->expires_at < now();
    }
}
