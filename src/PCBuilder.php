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

    /**
     * Assembles a computer
     * --------------------
     * Собирает компьютер
     *
     * @return ComputerInterface
     */
    public function createComputer(): ComputerInterface
    {
        $this
            ->setPart(new Hardware\Motherboard(Order::MB))
            ->setPart(new Hardware\Cpu(Order::CPU))
            ->setPart(new Hardware\Ram(Order::RAM))
            ->setPart(new Hardware\Gpu(Order::GPU))
            ->setPart(new Hardware\Ssd(Order::SSD))
            ->setPart(new Hardware\Hdd(Order::HDD));

        return new Desktop($this->components);
    }

    /**
     * Adds a computer element
     * ----------------------------
     * Добавляет элемент компьютера
     *
     * @param  AbstractPart     $part
     * @return BuilderInterface
     */
    private function setPart(AbstractPart $part): BuilderInterface
    {
        $this->components[get_class($part)] = $part;
        return $this;
    }
}
