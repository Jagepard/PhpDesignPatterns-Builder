<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

class Processor extends AbstractPart
{
    /**
     * Processor constructor.
     * @param  string  $processor
     */
    public function __construct(string $processor)
    {
        parent::__construct($processor);
    }
}
