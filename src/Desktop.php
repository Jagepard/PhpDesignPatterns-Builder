<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder;

use Creational\Builder\{Hardware\AbstractPart, Interfaces\ComputerInterface};

class Desktop implements ComputerInterface
{
    private array $components = [];

    /**
     * Sets an element
     * ---------------------
     * Устанавливает элемент
     *
     * @param  array $part
     */
    public function __construct(array $part)
    {
        $this->components = $part;
    }

    /**
     * Gets an element
     * ----------------
     * Получает элемент
     *
     * @param  string       $part
     * @return AbstractPart
     */
    public function getComponent(string $part): AbstractPart
    {
        return $this->components[$part];
    }
}
