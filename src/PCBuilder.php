<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder;

use Creational\Builder\{Hardware\AbstractPart, Interfaces\BuilderInterface, Interfaces\ComputerInterface};

class PCBuilder implements BuilderInterface
{
    private array $components;

    public function setPart(AbstractPart $part): BuilderInterface
    {
        $this->components[get_class($part)] = $part;
        return $this;
    }

    public function getComputer(): ComputerInterface
    {
        return new Desktop($this->components);
    }
}
