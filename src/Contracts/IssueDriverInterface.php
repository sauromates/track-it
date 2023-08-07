<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Contracts;

/**
 * An issue driver is responsible for retrieving and manipulating records from various possible issue sources.
 *
 * Common examples of such sources are local database, external tools like Redmine, Jira, Gitlab, etc. Any driver
 * that implements this interface should define a unique name, which will be used as an identifier.
 */
interface IssueDriverInterface
{
    /**
     * Returns a unique driver name to be used in a Manager service.
     *
     * The most common ways to implement it would be either to introduce a static property or constant in a
     * concrete driver implementation or just provide a name in a return statement.
     */
    public static function id(): string;

    public function issues(): iterable;

    public function issue(int|string $identifier): IssueInterface;
}
