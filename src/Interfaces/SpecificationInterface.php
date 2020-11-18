<?php

declare(strict_types=1);

namespace OrionUa\Specification\Interfaces;

interface SpecificationInterface
{
    /**
     * @param object $object
     *
     * @return bool
     */
    public function isSatisfiedBy(object $object): bool;

    /**
     * And bool logic operation with Specifications
     *
     * @param SpecificationInterface $specification
     * @return SpecificationInterface
     */
    public function and(SpecificationInterface $specification): SpecificationInterface;

    /**
     * Or bool logic operation with Specifications
     *
     * @param SpecificationInterface $specification
     * @return SpecificationInterface
     */
    public function or(SpecificationInterface $specification): SpecificationInterface;
}
