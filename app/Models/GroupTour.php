<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

/**
 * Class GroupTour
 * @package App\Models
 */
class GroupTour extends Model
{
    /**
     * @var int
     */
    protected $perPage = 12;

    /**
     * @var array
     */
    protected $casts = [
        'faq' => 'json',
        'files' => 'json',
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
     * @return string
     */
    public function getBigImageLinkAttribute(): string
    {
        return Storage::url($this->big_image);
    }

    /**
     * @param $value
     * @return array
     */
    public function getFaqAttribute($value): array
    {
        return array_values(json_decode($value, true) ?: []);
    }

    /**
     * @param $value
     */
    public function setFaqAttribute($value): void
    {
        $this->attributes['faq'] = json_encode(array_values($value));
    }

    /**
     * @return BelongsToMany
     */
    public function tours(): BelongsToMany
    {
        return $this->belongsToMany(Tour::class, 'group_tour_tour');
    }


    /**
     * @param $value
     * @return array
     */
    public function getFilesAttribute($value): array
    {
        return array_values(json_decode($value, true) ?: []);
    }

    /**
     * @param $value
     */
    public function setFilesAttribute($value): void
    {
        $this->attributes['files'] = json_encode(array_values($value));
    }
}
