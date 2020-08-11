<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

class Processor extends AbstractPart
{
    public function __construct(string $processor)
    {
        parent::__construct($processor);
    }
}
