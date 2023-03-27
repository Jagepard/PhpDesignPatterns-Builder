<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Builder\Hardware;

abstract class AbstractPart
{
    protected string $value;

    /**
     * Sets a value
     * ----------------------
     * Устанавливает значение
     *
     * @param  string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets a value
     * -----------------
     * Получает значение
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
