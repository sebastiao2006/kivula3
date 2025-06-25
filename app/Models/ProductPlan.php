<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPlan extends Model
{
    protected $fillable = [
        'product',
        'title',
        'price',
        'period',
        'description',
        'features',
        'popular'
    ];

    protected $casts = [
        'features' => 'array',
        'popular' => 'boolean'
    ];
}