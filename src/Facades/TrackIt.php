<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sauromates\TrackIt\TrackIt
 */
final class TrackIt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sauromates\TrackIt\TrackIt::class;
    }
}
