<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 * @package App\Models
 *
 * @property string $question
 * @property string $answer
 * @property int $visible
 * @property int $order
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Faq extends Model
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
}
