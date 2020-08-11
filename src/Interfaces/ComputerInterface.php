<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Interfaces;

use Creational\Builder\Hardware\AbstractPart;

interface ComputerInterface
{
    public function getComponent(string $part): AbstractPart;
}
