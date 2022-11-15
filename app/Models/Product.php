<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'products';

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->using(ProductUser::class)
            ->as('review')
            ->withPivot([
                'review',
                'rating',
            ])
            ->withTimestamps()
            ->latest('product_user.created_at');
    }

    public function productReviews(): HasMany
    {
        return $this->hasMany(ProductUser::class);
    }
}
