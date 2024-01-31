<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Reservation extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'address',
        'telephone',
        'date1', // start of rent
        'date2', // end of rent
        'days',
        'total',
    ];

    public function cars(): HasOne {
        return $this->hasOne(Car::class);
    }
}
