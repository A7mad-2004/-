<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoriteItem extends Model
{
    //
    use HasFactory;
    use softDeletes;

    public function favorite(): BelongsTo
    {
        return $this->belongsTo(Favorite::class);
    }
    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
}
