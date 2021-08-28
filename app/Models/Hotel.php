<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Hotel
 * @package App\Models
 */
class Hotel extends Model
{
    /**
     * @var array
     */
    protected $casts = [
        'faq' =>'json',
    ];

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}

