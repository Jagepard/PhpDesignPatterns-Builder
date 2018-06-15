<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

/**
 * Class AbstractComputer
 * @package Creational\Builder
 */
abstract class AbstractComputer
{

    /**
     * @var array
     */
    protected $components = [];

    /**
     * AbstractComputer constructor.
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->components = $params;
    }
}
