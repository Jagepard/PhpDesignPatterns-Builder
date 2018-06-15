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
    protected $master;

    protected function setUp(): void
    {
        $this->master = new Master(new DesktopBuilder());
    }

    public function testInstance()
    {
        $this->master->getBuilder()
            ->addParam('hdd', 1024)
            ->addParam('ram', 8192)
            ->addParam('cpu', 3000)
            ->addParam('gpu', 5000)
            ->addParam('software', 'UNIX');

        $this->assertInstanceOf(AbstractComputer::class, $this->master->build());
    }
}
