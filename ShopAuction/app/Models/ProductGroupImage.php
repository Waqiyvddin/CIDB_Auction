<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroupImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'productgroup_id',
        'image_path',
        'image_name',
        'image_index',
    ];
}
