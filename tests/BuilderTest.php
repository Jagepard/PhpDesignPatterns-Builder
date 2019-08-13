<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder\Tests;

use Creational\Builder\Cpu;
use Creational\Builder\Gpu;
use Creational\Builder\Hdd;
use Creational\Builder\Ram;
use Creational\Builder\Master;
use Creational\Builder\Software;
use Creational\Builder\Motherboard;
use Creational\Builder\DesktopBuilder;
use Creational\Builder\ComputerInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class BuilderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Master
     */
    private $master;

    protected function setUp(): void
    {
        $this->master = new Master();
    }

    public function testInstance()
    {
        $this->getMaster()->setBuilder(new DesktopBuilder());
        $this->getMaster()->getBuilder()
            ->setParam(new Motherboard('Hardware'))
            ->setParam(new Hdd('2Tb'))
            ->setParam(new Ram('32Gb'))
            ->setParam(new Cpu('8 core'))
            ->setParam(new Gpu('16Gb'))
            ->setParam(new Software('UNIX'));

        $this->assertInstanceOf(ComputerInterface::class, $this->getMaster()->build());
    }

    /**
     * @return Master
     */
    public function getMaster(): Master
    {
        return $this->master;
    }
}
