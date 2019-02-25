<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

/**
 * Class Director
 * @package Creational\Builder
 */
class Master implements MasterInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;

    /**
     * @return AbstractComputer
     */
    public function build(): AbstractComputer
    {
        return $this->getBuilder()->getComputer();
    }

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface
    {
        return $this->builder;
    }

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

}
