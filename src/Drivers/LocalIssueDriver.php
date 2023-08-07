<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Drivers;

use Sauromates\TrackIt\Contracts\IssueDriverInterface;
use Sauromates\TrackIt\Contracts\IssueInterface;
use Sauromates\TrackIt\Models\Issue;

final class LocalIssueDriver implements IssueDriverInterface
{
    private const ID = 'local';

    public static function id(): string
    {
        return self::ID;
    }

    public function issues(): iterable
    {
        return Issue::all();
    }

    public function issue(int|string $identifier): IssueInterface
    {
        return Issue::where('id', $identifier)->firstOrFail();
    }
}
