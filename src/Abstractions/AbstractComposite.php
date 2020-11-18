<?php

declare(strict_types=1);

namespace OrionUa\Specification\Abstractions;

use OrionUa\Specification\Interfaces\CompositeInterface;
use OrionUa\Specification\Interfaces\SpecificationInterface;

abstract class AbstractComposite extends AbstractSpecification implements CompositeInterface
{
    /** @var SpecificationInterface */
    protected $specificationLeft;
    /** @var SpecificationInterface */
    protected $specificationRight;

    /**
     * @param SpecificationInterface $specificationLeft
     * @param SpecificationInterface $specificationRight
     */
    public function __construct(SpecificationInterface $specificationLeft, SpecificationInterface $specificationRight)
    {
        $this->specificationLeft = $specificationLeft;
        $this->specificationRight = $specificationRight;
    }
}
