<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Not implements Stringable
{
    private $arg;

    /**
     * @param string $arg
     */
    public function __construct($arg)
    {
        $this->arg = $arg;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('not(%s)', $this->arg);
    }
}