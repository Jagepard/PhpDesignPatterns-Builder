<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Interfaces;

use Creational\Builder\Hardware\AbstractPart;

interface BuilderInterface
{
    public function setPart(AbstractPart $part): BuilderInterface;
    public function getComputer(): ComputerInterface;
}
