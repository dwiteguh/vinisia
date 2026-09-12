<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'origin',
        'grade',
        'length',
        'moisture',
        'packaging',
        'price',
        'stock',
        'image',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'price' => 'decimal:2',
    ];
}
