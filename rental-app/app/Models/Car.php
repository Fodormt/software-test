<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate',
        'filename',
        'filename_hash',
        'price',
    ];

    public function reservations(): BelongsToMany {
        return $this->belongsToMany(Reservation::class);
    }
}
