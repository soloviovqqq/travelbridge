<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Country
 * @package App\Models
 *
 * @property string $title
 * @property string $alias
 * @property string|null $slogan
 * @property string $description
 * @property string $currency
 * @property string $languages
 * @property string $small_image
 * @property string $big_image
 * @property int $visible
 * @property int $order
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Country extends Model
{
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
}
