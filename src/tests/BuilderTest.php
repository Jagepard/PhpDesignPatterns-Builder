<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Creational\Builder\DanilaMaster;
use Creational\Builder\Computer;

/**
 * Class FactoryMethodTest
 */
class BuilderTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $computer;


    protected function setUp(): void
    {
        $master = new DanilaMaster();
        $master->buildComputer('Yosemite');
        $this->computer = $master->getComputer();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(Computer::class, $this->getComputer());
    }

    public function testValues()
    {
        $this->assertEquals($this->getComputer()->changeSoftware('Mavericks')->getSoftware(), 'Mavericks');
        $this->assertEquals($this->getComputer()->increaseHdd()->getHdd(), 1000);
        $this->assertEquals($this->getComputer()->increaseRam()->getRam(), 8192);
        $this->assertEquals($this->getComputer()->overclockGpu()->getGpu(), 3072);
        $this->assertEquals($this->getComputer()->overclockCpu()->getCpu(), 2500);
    }

    /**
     * @return mixed
     */
    public function getComputer()
    {
        return $this->computer;
    }
}
