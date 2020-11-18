<?php

declare(strict_types=1);

namespace OrionUa\Specification\Abstractions;

use OrionUa\Specification\AndNot;
use OrionUa\Specification\AndX;
use OrionUa\Specification\Interfaces\SpecificationInterface;
use OrionUa\Specification\OrNot;
use OrionUa\Specification\OrX;

abstract class AbstractSpecification implements SpecificationInterface
{
    /**
     * @param SpecificationInterface $specification
     *
     * @return SpecificationInterface
     */
    final public function and(SpecificationInterface $specification): SpecificationInterface
    {
        return new AndX($this, $specification);
    }

    /**
     * @param SpecificationInterface $specification
     *
     * @return SpecificationInterface
     */
    final public function or(SpecificationInterface $specification): SpecificationInterface
    {
        return new OrX($this, $specification);
    }

    /**
     * @param SpecificationInterface $specification
     *
     * @return SpecificationInterface
     */
    final public function andNot(SpecificationInterface $specification): SpecificationInterface
    {
        return new AndNot($this, $specification);
    }

    /**
     * @param SpecificationInterface $specification
     *
     * @return SpecificationInterface
     */
    final public function orNot(SpecificationInterface $specification): SpecificationInterface
    {
        return new OrNot($this, $specification);
    }
}
