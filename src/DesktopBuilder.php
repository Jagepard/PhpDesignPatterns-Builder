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
    protected $params;

    /**
     * @param string $key
     * @param        $value
     * @return $this
     */
    public function addParam(string $key, $value): BuilderInterface
    {
        $this->params[$key] = $value;

        return $this;
    }

    /**
     * @return AbstractComputer
     */
    public function getComputer(): AbstractComputer
    {
        return new Desktop($this->params);
    }
}
