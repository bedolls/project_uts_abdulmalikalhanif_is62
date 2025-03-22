<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'slug',
    ];

    public function boardinghouses()
    {
        return $this->hasMany(BoardingHouse::class);
    }
}
