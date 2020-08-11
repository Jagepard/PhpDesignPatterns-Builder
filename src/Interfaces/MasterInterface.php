<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Interfaces;

interface MasterInterface
{
    public function build(): ComputerInterface;
    public function getBuilder(): BuilderInterface;
    public function setBuilder(BuilderInterface $builder): void;
}
