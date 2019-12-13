<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Interfaces;

use Creational\Builder\Hardware\AbstractPart;

interface BuilderInterface
{
    /**
     * @param AbstractPart $params
     * @return BuilderInterface
     */
    public function setParam(AbstractPart $params): BuilderInterface;

    /**
     * @return ComputerInterface
     */
    public function getComputer(): ComputerInterface;
}
