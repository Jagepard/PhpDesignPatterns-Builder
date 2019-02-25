<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Builder\Tests;

use Creational\Builder\Master;
use Creational\Builder\DesktopBuilder;
use Creational\Builder\AbstractComputer;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class BuilderTest
 * @package Creational\Builder\Tests
 */
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
            ->setParam('hdd', 1024)
            ->setParam('ram', 8192)
            ->setParam('cpu', 3000)
            ->setParam('gpu', 5000)
            ->setParam('software', 'UNIX');

        $this->assertInstanceOf(AbstractComputer::class, $this->getMaster()->build());
    }

    /**
     * @return Master
     */
    public function getMaster(): Master
    {
        return $this->master;
    }
}
