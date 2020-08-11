<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

class Motherboard extends AbstractPart
{
    public function __construct(string $chipset)
    {
        parent::__construct($chipset);
    }
}
