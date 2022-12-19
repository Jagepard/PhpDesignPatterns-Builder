<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder;

use Creational\Builder\Interfaces\{DirectorInterface, BuilderInterface, ComputerInterface};

class Director implements DirectorInterface
{
    private BuilderInterface $builder;

    public function build(): ComputerInterface
    {
        $this->builder
            ->setPart(new Hardware\Motherboard(Order::MB))
            ->setPart(new Hardware\Cpu(Order::CPU))
            ->setPart(new Hardware\Ram(Order::RAM))
            ->setPart(new Hardware\Gpu(Order::GPU))
            ->setPart(new Hardware\Ssd(Order::SSD))
            ->setPart(new Hardware\Hdd(Order::HDD));

        return $this->builder->getComputer();
    }

    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }
}
