<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

class Storage extends AbstractPart
{
    public function __construct(string $volume)
    {
        parent::__construct($volume);
    }
}
