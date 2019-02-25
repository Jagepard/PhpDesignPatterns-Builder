<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

/**
 * Interface BuilderInterface
 */
interface BuilderInterface
{
    /**
     * @param string $key
     * @param        $value
     * @return $this
     */
    public function setParam(string $key, $value): BuilderInterface;

    /**
     * @return AbstractComputer
     */
    public function getComputer(): AbstractComputer;
}
