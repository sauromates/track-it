<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Contracts;

/**
 * An extension of default IssueInterface.
 *
 * Introduces two extra methods for parsing issue data from external source and serializing issue before
 * sending it to external source.
 */
interface ExternalIssueInterface extends IssueInterface
{
    /**
     * Transforms raw data into an internal object. If needed, signature can be extended to `array|string`.
     *
     * @param  non-empty-array<array-key, mixed>  $data
     */
    public function hydrate(array $data): self;

    /**
     * Serializes internal object into format acceptable by external application. Serialization result can be
     * anything like array, JSON string or serialized PHP object.
     *
     * @return non-empty-array<array-key, mixed>|non-empty-string
     */
    public function dehydrate(): array|string;
}
