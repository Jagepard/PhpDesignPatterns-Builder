<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Tests;

use Creational\Builder\{Order,
    Director,
    PCBuilder,
    Hardware\Cpu,
    Hardware\Gpu,
    Hardware\Ram,
    Hardware\Ssd,
    Hardware\Hdd,
    Hardware\Motherboard,
    Interfaces\ComputerInterface
};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class BuilderTest extends PHPUnit_Framework_TestCase
{
    private ComputerInterface $desktop;

    protected function setUp(): void
    {
        $employe = new Director();
        $this->desktop = $employe->build(new PCBuilder());
    }

    public function testInstance()
    {
        $this->assertInstanceOf(ComputerInterface::class, $this->desktop);
    }

    public function testParts()
    {
        $this->assertEquals(Order::MB, $this->desktop->getComponent(Motherboard::class)->getValue());
        $this->assertEquals(Order::CPU, $this->desktop->getComponent(Cpu::class)->getValue());
        $this->assertEquals(Order::RAM, $this->desktop->getComponent(Ram::class)->getValue());
        $this->assertEquals(Order::GPU, $this->desktop->getComponent(Gpu::class)->getValue());
        $this->assertEquals(Order::SSD, $this->desktop->getComponent(Ssd::class)->getValue());
        $this->assertEquals(Order::HDD, $this->desktop->getComponent(Hdd::class)->getValue());
    }
}
