<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class IfThenElse implements Stringable
{
    private $condition;
    private $then;
    private $else;

    /**
     * @param string $condition
     * @param string $then
     * @param string $else
     */
    public function __construct(string $condition, string $then, string $else)
    {
        $this->condition = $condition;
        $this->then = $then;
        $this->else = $else;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('if(%s,%s,%s)', $this->condition, $this->then, $this->else);
    }
}