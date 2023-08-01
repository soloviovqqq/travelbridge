<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MainInfo
 * @package App\Models
 */
class MainInfo extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'agency_text',
        'gallery'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'gallery' => 'json',
    ];
}
