<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    //

    use HasFactory;
    use SoftDeletes;

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

}
