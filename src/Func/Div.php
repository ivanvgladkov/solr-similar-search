<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Div implements Stringable
{
    private $dividend;
    private $divisor;

    /**
     * @param $dividend
     * @param $divisor
     */
    public function __construct($dividend, $divisor)
    {
        $this->dividend = $dividend;
        $this->divisor = $divisor;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('div(%s,%s)', $this->dividend, $this->divisor);
    }
}