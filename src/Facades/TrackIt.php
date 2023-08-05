<?php

namespace Sauromates\TrackIt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sauromates\TrackIt\TrackIt
 */
class TrackIt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sauromates\TrackIt\TrackIt::class;
    }
}
