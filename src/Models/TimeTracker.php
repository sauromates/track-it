<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Models;

use Illuminate\Database\Eloquent\Model;
use Sauromates\TrackIt\Contracts\TimeTrackerInterface;
use Sauromates\TrackIt\Enums\IssueProvider;

final class TimeTracker extends Model implements TimeTrackerInterface
{
    protected $fillable = [
        'issue_provider',
        'issue_url',
        'started_at',
        'stopped_at',
        'paused_at',
    ];

    protected $casts = [
        'issue_provider' => IssueProvider::class,
        'started_at' => 'datetime',
        'stopped_at' => 'datetime',
        'paused_at' => 'datetime',
        'resumed_at' => 'datetime',
    ];

    public function start(): void
    {
        $this->started_at = new \DateTimeImmutable(timezone: config('app.timezone'));

        $this->save();
    }

    public function stop(): void
    {
        $this->stopped_at = new \DateTimeImmutable(timezone: config('app.timezone'));

        $this->save();
    }

    public function pause(): void
    {
        $this->paused_at = new \DateTimeImmutable(timezone: config('app.timezone'));

        $this->save();
    }

    public function resume(): void
    {
        $this->resumed_at = new \DateTimeImmutable(timezone: config('app.timezone'));

        $this->save();
    }
}
