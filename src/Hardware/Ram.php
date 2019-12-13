<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

class Ram extends AbstractPart
{
    /**
     * Ram constructor.
     * @param  string  $specification
     */
    public function __construct(string $specification)
    {
        parent::__construct($specification);
    }
}
