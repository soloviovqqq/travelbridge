<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

/**
 * Class Hotel
 * @package App\Models
 */
class Hotel extends Model
{
    public const AMENITIES = [
        [
            'key' => 'wifi',
            'img' => 'wf.svg',
            'text' => 'Бесплатный Wifi',
        ],
        [
            'key' => 'reservations',
            'img' => 'cld.svg',
            'text' => 'Бесплатная бронь',
        ],
        [
            'key' => 'credit_cards',
            'img' => 'card.svg',
            'text' => 'Прием кредитных карт',
        ],
        [
            'key' => 'non_smoking',
            'img' => 'smk.svg',
            'text' => 'Курение запрещено',
        ],
        [
            'key' => 'air_conditioner',
            'img' => 'air.svg',
            'text' => 'Кондиционер',
        ],
        [
            'key' => 'car_parking',
            'img' => 'car.svg',
            'text' => 'Бесплатная парковка',
        ],
        [
            'key' => 'cocktails',
            'img' => 'ct.svg',
            'text' => 'Бесплатные коктели',
        ],
        [
            'key' => 'pool',
            'img' => 'pool.svg',
            'text' => 'Басейн',
        ],
    ];

    /**
     * @var int
     */
    protected $perPage = 12;

    /**
     * @var array
     */
    protected $casts = [
        'images' =>'json',
        'faq' =>'json',
        'amenities' =>'json',
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
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @param $value
     * @return array
     */
    public function getImagesAttribute($value): array
    {
        return array_values(json_decode($value, true) ?: []);
    }

    /**
     * @param $value
     */
    public function setImagesAttribute($value): void
    {
        $this->attributes['images'] = json_encode(array_values($value));
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
     * @return array
     */
    public function getAmenitiesArrayAttribute(): array
    {
        return collect(self::AMENITIES)->filter(function (array $amenity) {
            return in_array($amenity['key'], json_decode($this->attributes['amenities']), true);
        })->toArray();
    }
}

