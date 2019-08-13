<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

interface BuilderInterface
{
    /**
     * @param ParamsInterface $params
     * @return BuilderInterface
     */
    public function setParam(ParamsInterface $params): BuilderInterface;

    /**
     * @return ComputerInterface
     */
    public function getComputer(): ComputerInterface;
}
