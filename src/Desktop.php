<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

class Desktop implements ComputerInterface
{
    /**
     * @var array
     */
    private $components = [];

    /**
     * AbstractComputer constructor.
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->components = $params;
    }
}
