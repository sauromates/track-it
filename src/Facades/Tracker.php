<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Facades;

use Illuminate\Support\Facades\Facade;
use Sauromates\TrackIt\Contracts\IssueDriverInterface;
use Sauromates\TrackIt\Contracts\IssueInterface;
use Sauromates\TrackIt\TrackIt;

/**
 * @method static IssueDriverInterface driver(null|string $driver = null) Choose an issue provider. Defaults to local driver
 * @method static iterable issues() Get all issues from source
 * @method static IssueInterface issue() Get single issue from source
 */
final class Tracker extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TrackIt::class;
    }
}
