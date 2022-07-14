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

    protected $with = ['images'];

    protected $appends = ['status_name', 'visibility_name'];

    public function getStatusNameAttribute()
    {
        return Parameter::where('type_id', '=', $this->status)->first()->type_name;
    }

    public function getVisibilityNameAttribute()
    {
        return Parameter::where('type_id', '=', $this->visibility)->first()->type_name;
    }

    public function images()
    {
        return $this->hasMany(ProductGroupImage::class, 'productgroup_id');
    }
}
