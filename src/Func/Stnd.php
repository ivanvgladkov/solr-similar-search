<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Stnd implements Stringable
{
    private $value;
    private $mean;
    private $stddev;

    /**
     * @param $value
     * @param $mean
     * @param $stddev
     */
    public function __construct($value, $mean, $stddev)
    {
        $this->value = $value;
        $this->mean = $mean;
        $this->stddev = $stddev;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return new Div(
            new Sub(
                $this->value,
                $this->mean
            ),
            $this->stddev
        );
    }
}