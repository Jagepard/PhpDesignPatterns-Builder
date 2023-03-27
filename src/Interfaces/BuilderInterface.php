<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Interfaces;

interface BuilderInterface
{
    /**
     * @return ComputerInterface
     */
    public function createComputer(): ComputerInterface;
}
