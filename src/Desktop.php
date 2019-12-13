<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder;

use Creational\Builder\Hardware\AbstractPart;
use Creational\Builder\Interfaces\ComputerInterface;

class Desktop implements ComputerInterface
{
    /**
     * @var array
     */
    private $components = [];

    /**
     * Desktop constructor.
     * @param  array  $part
     */
    public function __construct(array $part)
    {
        $this->components = $part;
    }

    /**
     * @param  string  $part
     * @return AbstractPart
     */
    public function getComponent(string $part): AbstractPart
    {
        return $this->components[$part];
    }
}
