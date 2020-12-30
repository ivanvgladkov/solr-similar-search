<?php

namespace Solrsim\Dist;

use Solrsim\Func\IfThenElse;
use Solrsim\Func\NumDist;
use Solrsim\Interfaces\Stringable;

class Boolean implements Stringable
{

    /** @var string */
    protected $field;
    /** @var mixed */
    protected $value;

    /**
     * @param string $field
     * @param mixed $value
     */
    public function __construct(string $field, $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return new NumDist(
            new IfThenElse($this->field, 1, 0),
            new IfThenElse((int)$this->value, 1, 0)
        );
    }

}