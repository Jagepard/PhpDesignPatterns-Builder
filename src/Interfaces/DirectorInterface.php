<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Interfaces;

interface DirectorInterface
{
    /**
     * @param  BuilderInterface  $builder
     * @return ComputerInterface
     */
    public function build(BuilderInterface $builder): ComputerInterface;
}
