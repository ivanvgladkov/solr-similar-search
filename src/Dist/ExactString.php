<?php

namespace Solrsim\Dist;

use Solrsim\Func\Coalesce;
use Solrsim\Func\Eq;
use Solrsim\Func\IfThenElse;
use Solrsim\Func\StrEditDist;
use Solrsim\Interfaces\Stringable;

class ExactString implements Stringable
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
        return new IfThenElse(
            new Eq(
                new StrEditDist(
                    new Coalesce($this->field, '""'),
                    sprintf('"%s"', $this->value)
                ),
                1
            ),
            0,
            1
        );
    }

}