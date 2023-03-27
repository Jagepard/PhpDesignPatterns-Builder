<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder;

use Creational\Builder\Interfaces\{DirectorInterface, BuilderInterface, ComputerInterface};

class Director implements DirectorInterface
{
    /**
     * Assembles a computer
     * --------------------
     * Собирает компьютер
     *
     * @param  BuilderInterface  $builder
     * @return ComputerInterface
     */
    public function build(BuilderInterface $builder): ComputerInterface
    {
        return $builder->createComputer();
    }
}
