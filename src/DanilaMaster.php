<?php
/**
 * Date: 23.03.18
 * Time: 12:32
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\Builder;


/**
 * Class DanilaMaster
 * @package Creational\Builder
 */
class DanilaMaster
{

    protected $computer;

    public function getComputer(): Computer
    {
        return $this->computer;
    }

    public function buildComputer(string $software)
    {
        $builder        = new ComputerBuilder($software);
        $this->computer = $builder->getComputer();
    }
}