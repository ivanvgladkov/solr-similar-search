<?php

namespace Solrsim\Func;

use Solrsim\Interfaces\Stringable;

class Year implements Stringable
{
    private $date;

    /**
     * @param string $date
     */
    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return new Floor(
            new Sum([
                new Div(
                    new Ms($this->date),
                    31536000000
                ),
                1970
            ])
        );
    }
}