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
    public const PUBLIC_TYPE = 0;
    public const GROUP_TYPE = 1;

    /**
     * @var int
     */
    protected $perPage = 12;

    /**
     * @var array
     */
    protected $casts = [
        'images' =>'json',
        'description_images' =>'json',
        'schedule' =>'json',
        'program' =>'json',
        'faq' =>'json',
        'files' =>'json',
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
     * @param Builder $query
     * @return Builder
     */
    public function scopePublic(Builder $query): Builder
    {
        return $query->where('type', self::PUBLIC_TYPE);
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

    /**
     * @param $value
     * @return array
     */
    public function getAdditionalInfoAttribute($value): array
    {
        return array_values(json_decode($value, true) ?: []);
    }

    /**
     * @param $value
     */
    public function setAdditionalInfoAttribute($value): void
    {
        $this->attributes['additional_info'] = json_encode(array_values($value));
    }

    /**
     * @param $value
     * @return array
     */
    public function getScheduleAttribute($value): array
    {
        return array_values(json_decode($value, true) ?: []);
    }

    /**
     * @param $value
     */
    public function setScheduleAttribute($value): void
    {
        $this->attributes['schedule'] = json_encode(array_values($value));
    }

    /**
     * @param $value
     * @return array
     */
    public function getProgramAttribute($value): array
    {
        return array_values(json_decode($value, true) ?: []);
    }

    /**
     * @param $value
     */
    public function setProgramAttribute($value): void
    {
        $this->attributes['program'] = json_encode(array_values($value));
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
