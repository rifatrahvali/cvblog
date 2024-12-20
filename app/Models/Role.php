<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
# Role modeli için:
class Role extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name','slug','description'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
