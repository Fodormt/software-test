<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Car extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'plate',
        'filename',
        'filename_hash',
        'price',
        'is_active'
    ];

    public function reservations(): BelongsToMany {
        return $this->belongsToMany(Reservation::class);
    }
}
