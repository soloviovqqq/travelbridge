<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactMessage
 * @package App\Models
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property int $shown
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class ContactMessage extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
