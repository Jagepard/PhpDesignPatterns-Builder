<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Interfaces;

interface MasterInterface
{
    /**
     * @return ComputerInterface
     */
    public function build(): ComputerInterface;

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface;

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): void;
}
