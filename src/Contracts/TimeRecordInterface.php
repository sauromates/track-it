<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Contracts;

interface TimeRecordInterface
{
    public function totalTime(): int|float;

    public function associatedIssue(): IssueInterface;
}
