<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Models;

use Illuminate\Database\Eloquent\Model;

final class TimeRecord extends Model
{
    protected $fillable = [
        'category',
        'hours',
        'comment',
    ];

    protected $casts = [
        'hours' => 'float',
    ];
}
