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
    public function build(BuilderInterface $builder): ComputerInterface
    {
        return $builder->createComputer();
    }
}
