<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'background_image', 'about_image',
        'judul_1', 'konten_1', 'judul_2', 'konten_2', 'judul_3', 'konten_3'
    ];
}
