<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Tests;

use Creational\Builder\Order;
use Creational\Builder\Master;
use Creational\Builder\PCBuilder;
use Creational\Builder\Hardware\Cpu;
use Creational\Builder\Hardware\Gpu;
use Creational\Builder\Hardware\Ram;
use Creational\Builder\Hardware\Ssd;
use Creational\Builder\Hardware\Hdd;
use Creational\Builder\Hardware\Motherboard;
use Creational\Builder\Interfaces\MasterInterface;
use Creational\Builder\Interfaces\ComputerInterface;

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class BuilderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MasterInterface
     */
    private $master;

    /**
     * @var ComputerInterface
     */
    private $desktop;

    protected function setUp(): void
    {
        $this->master = new Master();
        $this->master->setBuilder(new PCBuilder());
        $this->master->getBuilder()
            ->setPart(new Motherboard(Order::MB))
            ->setPart(new Cpu(Order::CPU))
            ->setPart(new Ram(Order::RAM))
            ->setPart(new Gpu(Order::GPU))
            ->setPart(new Ssd(Order::SSD))
            ->setPart(new Hdd(Order::HDD));

        $this->desktop = $this->master->build();
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
