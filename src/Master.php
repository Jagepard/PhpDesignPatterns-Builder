<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder;

use Creational\Builder\Interfaces\{MasterInterface, BuilderInterface, ComputerInterface};

class Master implements MasterInterface
{
    private BuilderInterface $builder;

    public function build(): ComputerInterface
    {
        return $this->builder->getComputer();
    }

    public function getBuilder(): BuilderInterface
    {
        return $this->builder;
    }

    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }
}
