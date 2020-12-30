<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Sub implements Stringable
{
    private $minuend;
    private $subtrahend;

    /**
     * @param $minuend
     * @param $subtrahend
     */
    public function __construct($minuend, $subtrahend)
    {
        $this->minuend = $minuend;
        $this->subtrahend = $subtrahend;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('sub(%s,%s)', $this->minuend, $this->subtrahend);
    }
}