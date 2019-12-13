<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

class Motherboard extends AbstractPart
{
    /**
     * Motherboard constructor.
     * @param  string  $chipset
     */
    public function __construct(string $chipset)
    {
        $this->value = $chipset;
    }
}
