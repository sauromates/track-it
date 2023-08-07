<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Contracts;

interface TimeTrackerInterface
{
    public function start(): void;

    public function stop(): void;

    public function pause(): void;

    public function resume(): void;
}
