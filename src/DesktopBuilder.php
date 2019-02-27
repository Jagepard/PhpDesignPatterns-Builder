<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

/**
 * Class ComputerBuilder
 * @package Creational\Builder
 */
class DesktopBuilder implements BuilderInterface
{
    /**
     * @var array
     */
    private $params;

    /**
     * @param ParamsInterface $params
     * @return BuilderInterface
     */
    public function setParam(ParamsInterface $params): BuilderInterface
    {
        $this->params[] = $params;

        return $this;
    }

    /**
     * @return ComputerInterface
     */
    public function getComputer(): ComputerInterface
    {
        return new Desktop($this->params);
    }
}
