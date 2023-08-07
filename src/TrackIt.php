<?php

declare(strict_types=1);

namespace Sauromates\TrackIt;

use Illuminate\Support\Manager;
use Sauromates\TrackIt\Contracts\IssueDriverInterface;
use Sauromates\TrackIt\Drivers\LocalIssueDriver;

final class TrackIt extends Manager
{
    public function getDefaultDriver(): string
    {
        return LocalIssueDriver::id();
    }

    public function createLocalDriver(): IssueDriverInterface
    {
        return new LocalIssueDriver();
    }
}
