<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Tests;

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
            ->setParam(new Motherboard('X570'))
            ->setParam(new Cpu('AMD Ryzen™ 7 3700X'))
            ->setParam(new Ram('DDR4 16Gb 3200MHz PC25600'))
            ->setParam(new Gpu('GeForce RTX 2070 Super'))
            ->setParam(new Ssd('500Gb'))
            ->setParam(new Hdd('2Tb'));

        $this->desktop = $this->master->build();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(ComputerInterface::class, $this->desktop);
    }

    public function testParts()
    {
        $this->assertEquals('X570', $this->desktop->getComponent(Motherboard::class)->getValue());
        $this->assertEquals('AMD Ryzen™ 7 3700X', $this->desktop->getComponent(Cpu::class)->getValue());
        $this->assertEquals('DDR4 16Gb 3200MHz PC25600', $this->desktop->getComponent(Ram::class)->getValue());
        $this->assertEquals('GeForce RTX 2070 Super', $this->desktop->getComponent(Gpu::class)->getValue());
        $this->assertEquals('500Gb', $this->desktop->getComponent(Ssd::class)->getValue());
        $this->assertEquals('2Tb', $this->desktop->getComponent(Hdd::class)->getValue());
    }
}
