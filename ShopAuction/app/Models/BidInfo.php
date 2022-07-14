<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidInfo extends Model
{
    use HasFactory;

    protected $fillable =[
        'productgroup_id',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'duration_minute',
        'isLoop',
    ];
}
