<?php

declare(strict_types=1);

namespace OrionUa\Specification;

use OrionUa\Specification\Abstractions\AbstractComposite;

final class AndNot  extends AbstractComposite
{
    /**
     * @param object $object
     *
     * @return bool
     */
    public function isSatisfiedBy(object $object): bool
    {
        return $this->specificationLeft->isSatisfiedBy($object) && $this->specificationRight->isSatisfiedBy($object) !== true;
    }
}
