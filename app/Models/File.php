<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class File
 * @package App\Models
 *
 * @property string $file
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class File extends Model
{
    /**
     * @return string
     */
    public function getFileLinkAttribute(): string
    {
        return Storage::url($this->file);
    }
}
