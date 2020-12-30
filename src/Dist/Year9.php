<?php

namespace Solrsim\Dist;

use Solrsim\Func\Eq;
use Solrsim\Func\IfThenElse;
use Solrsim\Func\NumDist;

class Year9 extends Numerical
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return new NumDist(
            new IfThenElse(
                $this->field,
                new IfThenElse(
                    new Eq($this->field, 9999),
                    date('Y'),
                    $this->field
                ),
                $this->mean
            ),
            new IfThenElse(
                (int)$this->value,
                new IfThenElse(
                    new Eq((int)$this->value, 9999),
                    date('Y'),
                    (int)$this->value
                ),
                $this->mean
            )
        );
    }

}