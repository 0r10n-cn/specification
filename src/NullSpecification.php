<?php

declare(strict_types=1);

namespace OrionUa\Specification;
use OrionUa\Specification\Abstractions\AbstractSpecification;

/**
 * Null object pattern implementation for spec.
 *
 * @see https://en.wikipedia.org/wiki/Null_object_pattern
 */
final class NullSpecification extends AbstractSpecification
{
    /**
     * @param object $object
     * @return bool
     */
    public function isSatisfiedBy(object $object): bool
    {
        return true;
    }
}
