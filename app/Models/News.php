<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    protected $fillable = [
        'title',
        'image',          // ✅ correto, conforme a migration
        'date',
        'author_name',
        'author_image',   // ✅ correto, conforme a migration
        'category',
    ];
}

