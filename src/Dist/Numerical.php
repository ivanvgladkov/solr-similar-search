<?php

namespace Solrsim\Dist;

use Solrsim\Func\Coalesce;
use Solrsim\Func\NumDist;
use Solrsim\Func\Stnd;
use Solrsim\Interfaces\Stringable;

class Numerical implements Stringable
{
    /** @var string */
    protected $field;
    /** @var float */
    protected $value;
    /** @var float */
    protected $mean;
    /** @var float */
    protected $stddev;

    /**
     * @param string $field
     * @param float $value
     * @param float $mean
     * @param float $std
     */
    public function __construct(string $field, float $value, float $mean, float $std)
    {
        $this->field = $field;
        $this->value = $value;
        $this->mean = $mean;
        $this->stddev = $std;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return new NumDist(
            new Stnd(
                new Coalesce($this->field, $this->mean),
                $this->mean,
                $this->stddev
            ),
            new Stnd(
                new Coalesce((int)$this->value, $this->mean),
                $this->mean,
                $this->stddev
            )
        );
    }

}