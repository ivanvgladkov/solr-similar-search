<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Sqrt implements Stringable
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
        return sprintf('sqrt(%s)', $this->arg);
    }
}