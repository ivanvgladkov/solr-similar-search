<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Coalesce implements Stringable
{
    private $argA;
    private $argB;

    /**
     * @param $argA
     * @param $argB
     */
    public function __construct($argA, $argB)
    {
        $this->argA = $argA;
        $this->argB = $argB;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return new IfThenElse($this->argA, $this->argA, $this->argB);
    }
}