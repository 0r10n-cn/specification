<?php

declare(strict_types=1);

namespace OrionUa\Specification;

use OrionUa\Specification\Abstractions\AbstractComposite;

final class AndX extends AbstractComposite
{
    /**
     * @param $object
     *
     * @return bool
     */
    public function isSatisfiedBy($object): bool
    {
        return $this->specificationLeft->isSatisfiedBy($object) && $this->specificationRight->isSatisfiedBy($object);
    }
}
