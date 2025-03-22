<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bonus extends Model
{
    use HasFactory;

    protected $fillable =[
        'boarding_house_id',
        'image',
        'name',
        'description',
    ];

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }

}
