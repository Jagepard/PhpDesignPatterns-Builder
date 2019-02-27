<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

/**
 * Interface MasterInterface
 * @package Creational\Builder
 */
interface MasterInterface
{
    /**
     * @return ComputerInterface
     */
    public function build(): ComputerInterface;

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface;

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): void;
}
