<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'name',
        'company',
        'country',
        'email',
        'product_requirement',
        'quantity',
        'preferred_length',
        'destination',
        'message',
    ];
}