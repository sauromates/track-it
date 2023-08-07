<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Contracts;

use Illuminate\Support\Collection;

interface IssueRepositoryInterface
{
    public function all(): Collection;

    public function one(): ?IssueInterface;

    public function count(): ?int;

    public function filter(array $options): Collection;
}
