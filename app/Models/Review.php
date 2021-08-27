<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Review
 * @package App\Models
 *
 * @property string $name
 * @property string $text
 * @property string $image
 * @property int $visible
 * @property int $order
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Review extends Model
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
    public function getImageLinkAttribute(): string
    {
        return Storage::url($this->image);
    }
}
