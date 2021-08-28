<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

/**
 * Class Tour
 * @package App\Models
 */
class Tour extends Model
{
    /**
     * @var int
     */
    protected $perPage = 12;

    /**
     * @var array
     */
    protected $casts = [
        'schedule' =>'json',
        'program' =>'json',
    ];

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'alias';
    }

    /**
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderByDesc('order');
        });
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeVisible(Builder $query): Builder
    {
        return $query->where('visible', true);
    }

    /**
     * @return string
     */
    public function getSmallImageLinkAttribute(): string
    {
        return Storage::url($this->small_image);
    }

    /**
     * @return BelongsTo
     */
    public function tourType(): BelongsTo
    {
        return $this->belongsTo(TourType::class);
    }
}
