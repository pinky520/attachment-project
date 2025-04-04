<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venues_;

class Resources_ extends Model
{
    use HasFactory;
    protected $fillable= [
        'resource_brand',
        'resource_type',
        'resource_sn',
    ];

    public function ask()
    {
        return $this->hasMany(Venues_::class,'venue_name','region','capacity','status');
    }
}
