<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Trip extends Model
{
    //
     use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'destination_id',
        'title',
        'summary',
        'days',
        'price',
        'capacity',
        'start_date',
        'end_daet',
        'image',
        'status',
        'Child',
        'Adults',
    ];

   

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
     public function getImageUrlAttribute()
    {
        return Storage::disk('trip')->url($this->image);
    }

}
