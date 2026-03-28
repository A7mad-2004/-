<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Destination extends Model
{
    //
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'cuntry',
        'city',
        'description',
        'image',
        'is_active'
    ];
    protected $appends = [
        'image_url'
    ];

    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }
    public function getImageUrlAttribute()
    {
        return Storage::disk('destination')->url($this->image);

    }
}
