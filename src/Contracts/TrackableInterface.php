<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Contracts;

/**
 * One of the core package's interfaces defining an entity that can be tracked.
 *
 * It's intended to be used for issues (assigned tasks that require a time tracker), but the usage is not
 * limited only for them.
 *
 * Note that both methods are designed presuming that implementations would enable some logic to determine
 * whether time trackers should be started or resumed, stopped or paused.
 */
interface TrackableInterface
{
    /**
     * Start or resume time tracking.
     */
    public function track(): void;

    /**
     * Stops or pauses time tracking.
     */
    public function untrack(): void;
}
