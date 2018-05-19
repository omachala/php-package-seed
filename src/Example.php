<?php

namespace Omachala\PhpPackageSeed;

use Omachala\PhpPackageSeed\Interfaces\IExample;

/**
 * Class Test
 * @package Omachala\PhpPackageSeed
 */
class Example implements IExample
{

    /** @var string */
    private $variable = '';

    /**
     * @return string
     */
    public function getVariable(): string
    {
        return $this->variable;
    }

    /**
     * @param $variable
     * @return Example
     */
    public function setVariable($variable): self
    {
        $this->variable = $variable;
        return $this;
    }
}
