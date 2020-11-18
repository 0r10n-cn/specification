<?php

declare(strict_types=1);

namespace OrionUa\Specification\Interfaces;

interface CompositeInterface extends SpecificationInterface
{
    public function __construct(SpecificationInterface $specificationLeft, SpecificationInterface $specificationRight);
}
