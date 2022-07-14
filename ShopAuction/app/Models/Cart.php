<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'productgroup_id',
        'quantity',
        'user_id',

    ];

    protected $with =['productgroup'];

    public function productgroup()
    {
        return $this->hasOne(ProductGroup::class, 'id', 'productgroup_id');
    }
}
