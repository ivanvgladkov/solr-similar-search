<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Pow implements Stringable
{
    private $basis;
    private $exponent;

    /**
     * @param $basis
     * @param $exponent
     */
    public function __construct($basis, $exponent)
    {
        $this->basis = $basis;
        $this->exponent = $exponent;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('pow(%s,%s)', $this->basis, $this->exponent);
    }
}