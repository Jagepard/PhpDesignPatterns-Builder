<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder;

use Creational\Builder\Hardware\AbstractPart;
use Creational\Builder\Interfaces\BuilderInterface;
use Creational\Builder\Interfaces\ComputerInterface;

class PCBuilder implements BuilderInterface
{
    /**
     * @var array
     */
    private $components;

    /**
     * @param AbstractPart $part
     * @return BuilderInterface
     */
    public function setPart(AbstractPart $part): BuilderInterface
    {
        $this->components[get_class($part)] = $part;
        return $this;
    }

    /**
     * @return ComputerInterface
     */
    public function getComputer(): ComputerInterface
    {
        return new Desktop($this->components);
    }
}
