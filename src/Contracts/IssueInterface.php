<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Contracts;

/**
 * The core package interface that defines an abstract Issue concept.
 *
 * Any class designed to represent some kind of task, assignment or issue should implement this interface
 * in order to function properly within the package.
 *
 * Naturally, it's possible to create an extension of this interface for specific use cases.
 *
 * @see ExternalIssueInterface
 */
interface IssueInterface
{
    /**
     * Saves current object in its corresponding storage. Method is intended to be used both for create and
     * update operation.
     */
    public function store(): void;

    /**
     * Removes current object from a corresponding storage. Whether it is removed permanently or via a soft
     * delete is considered an implementation detail.
     */
    public function remove(): void;

    /**
     * Links an issue to an assignee. It's possible to provide more flexible assignee argument by using union
     * types like `string|UserInterface|AssigneeInterface $to`.
     *
     * @param  string  $to
     */
    public function assign(string $to): self;
}
