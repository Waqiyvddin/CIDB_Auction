<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'description',
        'price',
        'quantity',
        'condition',
        'isDiscounted',
        'discount_percent',
        'visibility',
        'for',
        'status',

    ];
}
