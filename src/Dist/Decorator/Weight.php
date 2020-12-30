<?php

namespace Solrsim\Dist\Decorator;

use Solrsim\Func\Mul;
use Solrsim\Interfaces\Stringable;

class Weight implements Stringable
{
    /** @var string */
    private $decorated;
    /** @var float */
    private $weight;

    /**
     * @param string $decorated
     * @param float $weight
     */
    public function __construct(
        string $decorated,
        float $weight
    ) {
        $this->decorated = $decorated;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return new Mul($this->decorated, $this->weight);
    }

}