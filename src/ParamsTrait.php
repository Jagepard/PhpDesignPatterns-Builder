<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder;

/**
 * Trait ParamsTrait
 * @package Creational\Builder
 */
trait ParamsTrait
{
    /**
     * @var string
     */
    private $value;

    /**
     * Hdd constructor.
     * @param $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
