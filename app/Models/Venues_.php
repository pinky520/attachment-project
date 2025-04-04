<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resources_;

class Venues_ extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'venue_name',
        'region',
        'capacity',
        'status'
    ];

    public function sum(): BelongsTo
        {
            return $this->belongsTo(Resources_::class,'resource_brand','resource_type','resource_sn');
        }
}
