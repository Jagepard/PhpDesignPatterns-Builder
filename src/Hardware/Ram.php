<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

class Ram extends AbstractPart
{
    public function __construct(string $specification)
    {
        parent::__construct($specification);
    }
}
