<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'telephone',
        'date1',
        'date2',
        'days',
        'total',
    ];

    public function cars(): HasOne {
        return $this->hasOne(Car::class);
    }
}
