<?php

namespace Sauromates\TrackIt\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sauromates\TrackIt\Contracts\IssueInterface;
use Sauromates\TrackIt\Contracts\TrackableInterface;
use Sauromates\TrackIt\Enums\IssueProvider;

final class Issue extends Model implements IssueInterface, TrackableInterface
{
    use HasFactory, SoftDeletes;

    protected $table = 'issues';

    protected $fillable = [
        'subject',
        'description',
        'due_date',
        'priority',
        'estimate',
        'hours_spent'
    ];

    protected $attributes = [
        'priority' => 1,
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function store(): void
    {
        $this->save();
    }

    public function remove(): void
    {
        $this->delete();
    }

    public function assign(string $to): self
    {
        return $this;
    }

    public function track(): void
    {
        $tracker = new TimeTracker([
            'issue_provider' => IssueProvider::LOCAL,
            'issue_url' => url(),
        ]);

        $tracker->start();
    }

    public function untrack(): void
    {
        // TODO: Implement untrack() method.
    }
}
