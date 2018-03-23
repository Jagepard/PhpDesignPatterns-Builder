<?php
/**
 * Date: 23.03.18
 * Time: 12:56
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\Builder;


/**
 * Class Computer
 * @package Creational\Builder
 */
/**
 * Class Computer
 * @package Creational\Builder
 */
class Computer
{

    /**
     * @var string
     */
    protected $software;
    /**
     * @var int
     */
    protected $hdd = 500;
    /**
     * @var int
     */
    protected $ram = 4096;
    /**
     * @var int
     */
    protected $gpu = 2048;
    /**
     * @var int
     */
    protected $cpu = 2000;

    /**
     * Computer constructor.
     * @param string $software
     */
    public function __construct(string $software)
    {
        $this->software = $software;
    }

    /**
     * @param null $key
     * @return $this
     */
    public function increaseHdd($key = null)
    {
        $this->hdd = isset($key) ? $this->hdd * $key : $this->hdd + 500;
        return $this;
    }

    /**
     * @param null $key
     * @return $this
     */
    public function increaseRam($key = null)
    {
        $this->ram = isset($key) ? $this->ram * $key : $this->ram + 4096;
        return $this;
    }

    /**
     * @param null $key
     * @return $this
     */
    public function overclockGpu($key = null)
    {
        $this->gpu = isset($key) ? $this->gpu * $key : $this->gpu + 1024;
        return $this;
    }

    /**
     * @param null $key
     * @return $this
     */
    public function overclockCpu($key = null)
    {
        $this->cpu = isset($key) ? $this->cpu + $key : $this->cpu + 500;
        return $this;
    }

    /**
     * @param string $software
     * @return $this
     */
    public function changeSoftware(string $software)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSoftware(): string
    {
        return $this->software;
    }

    /**
     * @return int
     */
    public function getHdd(): int
    {
        return $this->hdd;
    }

    /**
     * @return int
     */
    public function getRam(): int
    {
        return $this->ram;
    }

    /**
     * @return int
     */
    public function getGpu(): int
    {
        return $this->gpu;
    }

    /**
     * @return int
     */
    public function getCpu(): int
    {
        return $this->cpu;
    }
}
