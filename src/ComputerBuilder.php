<?php
/**
 * Date: 23.03.18
 * Time: 11:56
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\Builder;


/**
 * Class ComputerBuilder
 * @package Creational\Builder
 */
class ComputerBuilder
{

    /**
     * @var Computer
     */
    protected $computer;

    /**
     * ComputerBuilder constructor.
     * @param string $software
     */
    public function __construct(string $software)
    {
        $this->computer = new Computer($software);
    }

    /**
     * @return Computer
     */
    public function getComputer(): Computer
    {
        return $this->computer;
    }
}